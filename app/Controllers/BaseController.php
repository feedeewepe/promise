<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Config\Services;
use Config\Database;
use App\Models\UserGroupModel;

class BaseController extends Controller
{
	/**
     * @var \Myth\Auth\Authorization\FlatAuthorization
     */
    protected $authorize;

    /**
     * @var \Myth\Auth\Authentication\LocalAuthenticator
     */
    protected $auth;

    /**
     * @var \CodeIgniter\Database\BaseConnection|\CodeIgniter\Database\BaseBuilder
     */
    protected $db;

	/**
	 * GetPost, GetVar dll
	 *
	 * @var IncomingRequest;
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['auth', 'url', 'form','html','text'];

	protected $userGroup;

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		$this->auth = Services::authentication();
        $this->authorize = Services::authorization();
        $this->db = Database::connect();

		$this->userGroup = new UserGroupModel();		
		if(user()!==NULL){
			$this->userGroup = $this->userGroup->getGroupName(user()->usergroupid);
		}else{			
			// var_dump(user());die();
			$this->userGroup = NULL;
			return redirect()->route('/')->with('message', 'Login expired, please sign in!');	
			// session()->setFlashData('danger', 'Login expired, please sign in!');
            // return redirect()->to('/objects');		
		}
	}

}
