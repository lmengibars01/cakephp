<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PeticionesUsers Controller
 *
 * @property \App\Model\Table\PeticionesUsersTable $PeticionesUsers
 * @method \App\Model\Entity\PeticionesUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeticionesUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Peticiones', 'Users'],
        ];
        $peticionesUsers = $this->paginate($this->PeticionesUsers);

        $this->set(compact('peticionesUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Peticiones User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peticionesUser = $this->PeticionesUsers->get($id, [
            'contain' => ['Peticiones', 'Users'],
        ]);

        $this->set(compact('peticionesUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peticionesUser = $this->PeticionesUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $peticionesUser = $this->PeticionesUsers->patchEntity($peticionesUser, $this->request->getData());
            if ($this->PeticionesUsers->save($peticionesUser)) {
                $this->Flash->success(__('The peticiones user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The peticiones user could not be saved. Please, try again.'));
        }
        $peticiones = $this->PeticionesUsers->Peticiones->find('list', ['limit' => 200])->all();
        $users = $this->PeticionesUsers->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('peticionesUser', 'peticiones', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Peticiones User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peticionesUser = $this->PeticionesUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peticionesUser = $this->PeticionesUsers->patchEntity($peticionesUser, $this->request->getData());
            if ($this->PeticionesUsers->save($peticionesUser)) {
                $this->Flash->success(__('The peticiones user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The peticiones user could not be saved. Please, try again.'));
        }
        $peticiones = $this->PeticionesUsers->Peticiones->find('list', ['limit' => 200])->all();
        $users = $this->PeticionesUsers->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('peticionesUser', 'peticiones', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Peticiones User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peticionesUser = $this->PeticionesUsers->get($id);
        if ($this->PeticionesUsers->delete($peticionesUser)) {
            $this->Flash->success(__('The peticiones user has been deleted.'));
        } else {
            $this->Flash->error(__('The peticiones user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
