<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RestaurantData Controller
 *
 * @property \App\Model\Table\RestaurantDataTable $RestaurantData
 *
 * @method \App\Model\Entity\RestaurantData[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RestaurantDataController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $restaurantData = $this->paginate($this->RestaurantData);

        $this->set(compact('restaurantData'));
    }

    /**
     * View method
     *
     * @param string|null $id Restaurant Data id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $restaurantData = $this->RestaurantData->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('restaurantData', $restaurantData);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $restaurantData = $this->RestaurantData->newEntity();
        if ($this->request->is('post')) {
            $restaurantData = $this->RestaurantData->patchEntity($restaurantData, $this->request->getData());
            if ($this->RestaurantData->save($restaurantData)) {
                $this->Flash->success(__('The restaurant data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The restaurant data could not be saved. Please, try again.'));
        }
        $users = $this->RestaurantData->Users->find('list', ['limit' => 200]);
        $this->set(compact('restaurantData', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Restaurant Data id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $restaurantData = $this->RestaurantData->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $restaurantData = $this->RestaurantData->patchEntity($restaurantData, $this->request->getData());
            if ($this->RestaurantData->save($restaurantData)) {
                $this->Flash->success(__('The restaurant data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The restaurant data could not be saved. Please, try again.'));
        }
        $users = $this->RestaurantData->Users->find('list', ['limit' => 200]);
        $this->set(compact('restaurantData', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Restaurant Data id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $restaurantData = $this->RestaurantData->get($id);
        if ($this->RestaurantData->delete($restaurantData)) {
            $this->Flash->success(__('The restaurant data has been deleted.'));
        } else {
            $this->Flash->error(__('The restaurant data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
