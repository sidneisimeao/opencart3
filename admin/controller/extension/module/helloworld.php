<?php
class ControllerExtensionModuleHelloworld extends Controller
{
    private $data = [
        'breadcrumbs' => [],
        'error_warning' => '',
        'error_name' => '',
        'cancel' => '',
        'action' => '',
        'name' => '',
        'status' => '',
        'languages' => '',
        'header' => '',
        'column_left' => '',
        'footer' => '',
        'params' => ''
    ];

    public function __construct($registry)
    {
        parent::__construct($registry);
        // Carrega as variaveis do diretorio language -> admin/language/pt-br/extension/module/helloworld.php
        $this->load->language('extension/module/helloworld');
        // Botão/ação cancelar
        $this->data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
        // $this->document  refere-se ao documento html onde estamos contruindo o modulo
        $this->document->setTitle($this->language->get('heading_title'));
        // Carrega os menus superiores
        $this->data['breadcrumbs'] =
            [
                [
                    'text' => $this->language->get('text_home'), //home/sidnei/Fontes/opencart3/admin/language/pt-br/pt-br.php
                    'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
                ],
                [
                    'text' => $this->language->get('text_extension'),
                    'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
                ]
            ];

        // Carrega a model de confgurações OC_SETINGS ( responsavel por instalar e desintalar )
        $this->load->model('setting/module');

        // Indica qu eo modulo pode ser usado em vários idiomas
        $this->load->model('localisation/language');
        $this->data['languages'] = $this->model_localisation_language->getLanguages();

        // Componentes do layoult
        $this->data['header'] = $this->load->controller('common/header');
        $this->data['column_left'] = $this->load->controller('common/column_left');
        $this->data['footer'] = $this->load->controller('common/footer');
    }

    public function index()
    {

        if (!empty($this->request->post)) {
            $this->onSave();
        }

        // Caso modulo já existir
        if (!empty($this->request->get['module_id'])) {
            // Gera o link
            $this->data['params'] = '&module_id=' . $this->request->get['module_id'];
            // Obtem as infromações atuais do modulo
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        // Caso modulo tiver instalado carregaas informações
        $this->data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/helloworld', 'user_token=' . $this->session->data['user_token'] . $this->data['params'], true)
        );
        $this->data['action'] = $this->url->link('extension/module/helloworld', 'user_token=' . $this->session->data['user_token'] . $this->data['params'], true);


        /*
         O código abaixo é para definir os dados dos campos a serem transmitidos para a exibição. 
         Aqui, verificamos se o nome do módulo está definido ou a descrição do módulo e o status como abaixo, 
         se nada estiver definido, atribuímos o vazio.
        */
        if (isset($this->request->post['name'])) {
            $this->data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info)) {
            $this->data['name'] = $module_info['name'];
        }

        /*
         Este código abaixo é para passar os idiomas para a visualização,
          pois o OpenCart suporta vários idiomas, 
          por isso estamos mostrando como a descrição e o status do módulo podem 
          ser definidos de acordo com o idioma.
         */

        if (isset($this->request->post['status'])) {
            $this->data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info)) {
            $this->data['status'] = $module_info['status'];
        }



        $this->response->setOutput($this->load->view('extension/module/helloworld', $this->data));
    }

    protected function onSave()
    {
        // Valida os dados
        $this->validate();

        // Se não existir
        if (!isset($this->request->get['module_id'])) {
            // Cria o modulo
            $this->model_setting_module->addModule('helloworld', $this->request->post);
        } else {
            // Senão carrega as informações para edição
            $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
        }

        $this->session->data['success'] = $this->language->get('text_success');
        // redireciona para a página de extensões
        $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
    }

    /*
      Quando alguém envia o formulário, ele valida os dados com o método validate ()
      como o chamamos no método index () como $ this-> validate (), no método validate,
       geralmente checamos a permissão e definimos qualquer outra validação necessária.
     *@return void
     */
    protected function validate()
    {
        // Verifica se tem permissão para alterar
        if (!$this->user->hasPermission('modify', 'extension/module/helloworld')) {
            $this->data['warning'] = $this->language->get('error_permission');
        }

        // Faz algumas validações
        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->data['error_name'] = $this->language->get('error_name');
        }

        return !$this->data['error_name'];
    }

    /**
     * Função para instalação do modulo obrigatória  
     * @return void
     */
    public function install()
    {
        $this->model_setting_setting->editSetting('module_helloworld', ['module_helloworld_status' => 1]);
    }

    /**
     * Função para instalação do modulo obrigatória  
     * @return void
     */
    public function uninstall()
    {
        $this->model_setting_setting->deleteSetting('module_helloworld');
    }
}
