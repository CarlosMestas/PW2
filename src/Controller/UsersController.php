<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;
use Cake\Event\Event;
use Cake\Mailer\Email;

/**Email

 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
     public function initialize() { 
        parent::initialize(); 
        $this->loadComponent('CakeCaptcha.Captcha', [ 'captchaConfig' => 'ExampleCaptcha' ]); 
        $this->loadComponent('RequestHandler');
        $this->Auth->allow(['logout']); 
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AccessLevels']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['AccessLevels']
        ]);

        $this->viewBuilder()->options([
            'pdfConfig' => [
                'orientation' => 'portrait',
                'filename' => 'User_' . $id . '.pdf'
            ]
        ]);
        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if($this->Auth->user('access_level_id') == 1){
                $user = $this->Users->newEntity();
                if ($this->request->is('post')) {
                    $user = $this->Users->patchEntity($user, $this->request->getData());
                    if ($this->Users->save($user)) {
                        $this->Flash->success(__('The user has been saved.'));
                        /* 
                        $email = new Email('default');
                        $email->setTo($user->email)
                        ->setProfile('default')
                        ->setEmailFormat('html')
                            ->setSubject('Restaurant MANOLO')
                            ->send(sprintf('Usted se ah resgistrado con el correo : '.' '.$user->email));
                        */
                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                }
                $accessLevels = $this->Users->AccessLevels->find('list', ['limit' => 200]);
                $this->set(compact('user', 'accessLevels'));
        }
        else{
            $this->Flash->error(__('No authorized'));    
            return $this->redirect(['action' => 'index']);

        }
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->Auth->user(access_level_id) == 1){
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $accessLevels = $this->Users->AccessLevels->find('list', ['limit' => 200]);
        $this->set(compact('user', 'accessLevels'));
        }
        else{
            $this->Flash->error(__('No authorized'));    
            return $this->redirect(['action' => 'index']);

        }
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null){
            if($this->Auth->user(access_level_id) == 1){

        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        }
        else{
            $this->Flash->error(__('No authorized'));    
            return $this->redirect(['action' => 'index']);

        }
    }
    public function login(){ 
        if ($this->request->is('post')) { 
            $isHuman = captcha_validate($this->request->data['CaptchaCode']);
            unset($this->request->data['CaptchaCode']);
            if ($isHuman) { 
                $this->Flash->success(__('CAPTCHA validation passed, human visitor confirmed!')); 
                if ($this->request->is('post')) { 
                    $user = $this->Auth->identify(); 
                    if ($user) { $this->Auth->setUser($user);
                        return $this->redirect($this->Auth->redirectUrl());
                    } 
                    $this->Flash->error(__('Your username or password is incorrect.'));
                    } 
                } 
                else { 
                    $this->Flash->error(__('CAPTCHA validation failed, please try again.')); 
                }
        }
    }

    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }
    



}
