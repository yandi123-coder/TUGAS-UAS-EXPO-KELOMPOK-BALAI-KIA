<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\KategoriModel;
use App\Models\ProdukModel;
use App\Models\Produk1Model;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Kategori2;
use App\Models\Produk2Model;
use App\Models\Kategori3Model;
use App\Models\Produk3Model;





/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];
    protected $KategoriModel;
    protected $ProdukModel;
    protected $Produk1Model;
    protected $Kategori;
    protected $produk;
    protected $Kategori2;
    protected $Produk2Model;
    protected $Kategori3Model;
    protected $Produk3Model;

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        $this->KategoriModel = new KategoriModel();
        $this->ProdukModel = new ProdukModel();
        $this->Produk1Model = new ProdukModel();
        $this->Kategori = new Kategori();
        $this->Produk1Model = new Produk1Model();
        $this->Kategori2 = new Kategori2();
        $this->Produk2Model = new Produk2Model();
        $this->Kategori3Model = new Kategori3Model();
        $this->Produk3Model = new Produk3Model();
    }
}
