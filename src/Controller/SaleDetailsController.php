<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\ORM\Entity;
 

/**
 * SaleDetails Controller
 *
 * @property \App\Model\Table\SaleDetailsTable $SaleDetails
 *
 * @method \App\Model\Entity\SaleDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SaleDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sales', 'Products']
        ];
        $saleDetails = $this->paginate($this->SaleDetails);

        $this->set(compact('saleDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Sale Detail id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saleDetail = $this->SaleDetails->get($id, [
            'contain' => ['Sales', 'Products']
        ]);

        $this->set('saleDetail', $saleDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saleDetail = $this->SaleDetails->newEntity();
        if ($this->request->is('post')) {
            $saleDetail = $this->SaleDetails->patchEntity($saleDetail, $this->request->getData());
            if ($this->SaleDetails->save($saleDetail)) {
                $this->Flash->success(__('The sale detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale detail could not be saved. Please, try again.'));
        }
        $sales = $this->SaleDetails->Sales->find('list', ['limit' => 200]);
        $products = $this->SaleDetails->Products->find('list', ['limit' => 200]);
        $this->set(compact('saleDetail', 'sales', 'products'));
    }
    public function add2($id = null)
    {
        $saleDetail = $this->SaleDetails->newEntity();
        if ($this->request->is('post')) {
            $saleDetail = $this->SaleDetails->patchEntity($saleDetail, $this->request->getData());
            $saleDetail->sale_id = $id; 
            if ($this->SaleDetails->save($saleDetail)) {
                      
                $price = 0.0;
                $productos = TableRegistry::get('Products');
                $query = $productos->find();
                $salesGaaa = TableRegistry::get('Sales');
                $query2 = $salesGaaa->find();
                
                foreach ($query as $key) {
                    //$price += $key->price;
                    if($key->id == $saleDetail->product_id){
                        $price = ($key->price * $saleDetail->quantity);   
                    }   
                }
                $test = 0;
                $totalG = 0.0;
                foreach($query2 as $key2){
                    if($key2->id == $saleDetail->sale_id){
                        $totalG = $key2->total;
                        $test = $key2->id;
                        $key2->total = + $key2->total + $price;
                    }
                }

                $servername = "localhost";
                $database = "restaurant";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                $totalG = $totalG + $price;
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                echo "Connected successfully";
                
                $sql = "UPDATE sales SET total = $totalG WHERE id = $test;";
                
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } 
                else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);

                $this->Flash->success(__('The sale detail has been saved.'
                //.$price.' - '.$saleDetail->id.' - '.
                //$saleDetail->cant.' - '.$test.' - '.$totalG
                ));
            
                return $this->redirect(['controller' => 'Sales', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('The sale detail could not be saved. Please, try again.'));
        }
        $sales = $this->SaleDetails->Sales->find('list', ['limit' => 200]);
        $products = $this->SaleDetails->Products->find('list', ['limit' => 200]);
        $this->set(compact('saleDetail', 'sales', 'products'));
        $this->set($saleDetail->sale_id);
    }
    /**
     * Edit method
     *
     * @param string|null $id Sale Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saleDetail = $this->SaleDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saleDetail = $this->SaleDetails->patchEntity($saleDetail, $this->request->getData());
            if ($this->SaleDetails->save($saleDetail)) {
                $this->Flash->success(__('The sale detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale detail could not be saved. Please, try again.'));
        }
        $sales = $this->SaleDetails->Sales->find('list', ['limit' => 200]);
        $products = $this->SaleDetails->Products->find('list', ['limit' => 200]);
        $this->set(compact('saleDetail', 'sales', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saleDetail = $this->SaleDetails->get($id);
        if ($this->SaleDetails->delete($saleDetail)) {
            $this->Flash->success(__('The sale detail has been deleted.'));
        } else {
            $this->Flash->error(__('The sale detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'Sales', 'action' => 'view', $saleDetail->sale_id]);
    }
}
