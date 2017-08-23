<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Reports Controller
 *
 * @property \App\Model\Table\ResultestsTable $Reports
 */
class ReportsController extends AppController
{

    public function pdfView($schedule_id = null){
         
        $this->viewBuilder()->layout('ajax');
        //$this->viewBuilder()->layout('backend');
        $connection = ConnectionManager::get('default');
        $query = $connection->execute('SELECT * FROM view_result WHERE id_resxam = 1');
        $results = $query ->fetchAll('assoc');

        $this->set('title', 'My Great Title');
        $this->set('file_name', '2016-06' . '_June_CLM.pdf');
        //$this->response->type('pdf');
        $this->response->type('application/pdf');
        //$results = "PRUEBA";
        $this->set(compact('results'));
        $this->set('_serialize', ['results']);
 
    }

}
