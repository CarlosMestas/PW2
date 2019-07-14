<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductTypes Controller
 *
 * @property \App\Model\Table\ProductTypesTable $ProductTypes
 *
 * @method \App\Model\Entity\ProductType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $productTypes = $this->paginate($this->ProductTypes);

        $this->set(compact('productTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productType = $this->ProductTypes->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('productType', $productType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if($this->Auth->user(access_level_id) == 1){
$productType = $this->ProductTypes->newEntity();
        if ($this->request->is('post')) {
            $productType = $this->ProductTypes->patchEntity($productType, $this->request->getData());
            if ($this->ProductTypes->save($productType)) {
                $this->Flash->success(__('The product type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product type could not be saved. Please, try again.'));
        }
        $this->set(compact('productType'));


}
else{
     $this->Flash->error(__('No authorized'));    
     return $this->redirect(['action' => 'index']);
}
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        if($this->Auth->user(access_level_id) == 1){
            $productType = $this->ProductTypes->get($id, ['contain' => []]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $productType = $this->ProductTypes->patchEntity($productType, $this->request->getData());
                if ($this->ProductTypes->save($productType)) {
                    $this->Flash->success(__('The product type has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The product type could not be saved. Please, try again.'));
            }
            $this->set(compact('productType'));

            }
        else {
            $this->Flash->error(__('No authorized'));    
            return $this->redirect(['action' => 'index']);
        }   
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {


        if($this->Auth->user(access_level_id) == 1){    
            $this->request->allowMethod(['post', 'delete']);
            $productType = $this->ProductTypes->get($id);
            if ($this->ProductTypes->delete($productType)) {
                $this->Flash->success(__('The product type has been deleted.'));
            } else {
                $this->Flash->error(__('The product type could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }
    else{
         $this->Flash->error(__('No authorized'));    
         return $this->redirect(['action' => 'index']);
    }


        
    }
}
