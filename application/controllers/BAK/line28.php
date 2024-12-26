<?php
defined('BASEPATH') or exit('No direct script access allowed');

class line28 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }

    public function index()
    {


        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 28 | End Line';
        $data['efficiency_line28'] = $this->Model_line28->cari_efficiency_line28();
        $data['defect_line28'] = $this->Model_line28->cari_defect_line28();
        $data['buyer'] = $this->Model_line28->getbuyer();
        $data['no_ws'] = $this->Model_line28->getno_ws();
        $data['actuall28'] = $this->Model_line28->cari_actual();
        $data['day_target28'] = $this->Model_line28->cari_day_target();
        $data['variance'] = $this->Model_line28->cari_variance();
        $data['deffectl28'] = $this->Model_line28->cari_deffect();
        $data['rework'] = $this->Model_line28->cari_rework();
        $data['target_floor'] = $this->Model_line28->cari_target_floor();
        $data['target_menit'] = $this->Model_line28->cari_target_floor_menit();
        $data['jamkerl28'] = $this->Model_line28->cari_jamker();
        $data['smvl28'] = $this->Model_line28->cari_smv();
        $data['menpowerl28'] = $this->Model_line28->cari_menpower();

        $this->load->view('templates/header', $data);
        $this->load->view('line28/landingpage', $data);
        $this->load->view('templates/footer', $data);
    }

    public function dashboard1()
    {

        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');

        // }

        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 28 | End Line';
        $data['buyer'] = $this->Model_line28->getbuyer();
        $data['no_ws'] = $this->Model_line28->getno_ws();
        $data['target_floor'] = $this->Model_line28->cari_target_floor();
        $data['target_floordom'] = $this->Model_line28->cari_target_floordom();
        $data['jamkerl28'] = $this->Model_line28->cari_jamker();
        $data['actuall28'] = $this->Model_line28->cari_actual();
        $data['day_target28'] = $this->Model_line28->cari_day_target();
        $data['deffectl28'] = $this->Model_line28->cari_deffect();
        $data['output7'] = $this->Model_line28->cari_output_jam7();
        $data['output8'] = $this->Model_line28->cari_output_jam8();
        $data['output9'] = $this->Model_line28->cari_output_jam9();
        $data['output10'] = $this->Model_line28->cari_output_jam10();
        $data['output11'] = $this->Model_line28->cari_output_jam11();
        $data['output13'] = $this->Model_line28->cari_output_jam13();
        $data['output14'] = $this->Model_line28->cari_output_jam14();
        $data['output15'] = $this->Model_line28->cari_output_jam15();
        $data['output16'] = $this->Model_line28->cari_output_jam16();
        //deffect
        $data['deffect7'] = $this->Model_line28->cari_deffect_jam7();
        $data['deffect8'] = $this->Model_line28->cari_deffect_jam8();
        $data['deffect9'] = $this->Model_line28->cari_deffect_jam9();
        $data['deffect10'] = $this->Model_line28->cari_deffect_jam10();
        $data['deffect11'] = $this->Model_line28->cari_deffect_jam11();
        $data['deffect13'] = $this->Model_line28->cari_deffect_jam13();
        $data['deffect14'] = $this->Model_line28->cari_deffect_jam14();
        $data['deffect15'] = $this->Model_line28->cari_deffect_jam15();
        $data['deffect16'] = $this->Model_line28->cari_deffect_jam16();

        //deffect
        $data['rework7'] = $this->Model_line28->cari_rework_jam7();
        $data['rework8'] = $this->Model_line28->cari_rework_jam8();
        $data['rework9'] = $this->Model_line28->cari_rework_jam9();
        $data['rework10'] = $this->Model_line28->cari_rework_jam10();
        $data['rework11'] = $this->Model_line28->cari_rework_jam11();
        $data['rework13'] = $this->Model_line28->cari_rework_jam13();
        $data['rework14'] = $this->Model_line28->cari_rework_jam14();
        $data['rework15'] = $this->Model_line28->cari_rework_jam15();
        $data['rework16'] = $this->Model_line28->cari_rework_jam16();
        $data['target_menit'] = $this->Model_line28->cari_target_floor_menit();
        $data['smvl28'] = $this->Model_line28->cari_smv();
        $data['menpowerl28'] = $this->Model_line28->cari_menpower();


        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line28/landingpage2', $data);
        $this->load->view('templates/footer', $data);
        // redirect('landingpage');
        // redirect('landingpage/index');
    }


    public function dashboard2()
    {

        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');

        // }

        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 28 | End Line';
        $data['efficiency_line28'] = $this->Model_line28->cari_efficiency_line28();
        $data['defect_line28'] = $this->Model_line28->cari_defect_line28();
        $data['buyer'] = $this->Model_line28->getbuyer();
        $data['no_ws'] = $this->Model_line28->getno_ws();
        $data['actuall28'] = $this->Model_line28->cari_actual();
        $data['day_target28'] = $this->Model_line28->cari_day_target();
        $data['variance'] = $this->Model_line28->cari_variance();
        $data['deffectl28'] = $this->Model_line28->cari_deffect();
        $data['rework'] = $this->Model_line28->cari_rework();
        $data['target_floor'] = $this->Model_line28->cari_target_floor();
        $data['target_menit'] = $this->Model_line28->cari_target_floor_menit();
        $data['jamkerl28'] = $this->Model_line28->cari_jamker();
        $data['smvl28'] = $this->Model_line28->cari_smv();
        $data['menpowerl28'] = $this->Model_line28->cari_menpower();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line28/landingpage3', $data);
        $this->load->view('templates/footer', $data);
        // redirect('landingpage');
        // redirect('landingpage/index');
    }


     public function dashboard3()
    {

        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        //     log_message('error', 'Some variable did not contain a value.');

        // }

        $data['title'] = 'Dashboard WIP';
        $data['user'] = 'Line 28 | End Line';
        $data['efficiency_line28'] = $this->Model_line28->cari_efficiency_line28();
        $data['defect_line28'] = $this->Model_line28->cari_defect_line28();
        $data['buyer'] = $this->Model_line28->getbuyer();
        $data['no_ws'] = $this->Model_line28->getno_ws();
        $data['actuall28'] = $this->Model_line28->cari_actual();
        $data['day_target28'] = $this->Model_line28->cari_day_target();
        $data['variance'] = $this->Model_line28->cari_variance();
        $data['deffectl28'] = $this->Model_line28->cari_deffect();
        $data['rework'] = $this->Model_line28->cari_rework();
        $data['target_floor'] = $this->Model_line28->cari_target_floor();
        $data['target_menit'] = $this->Model_line28->cari_target_floor_menit();
        $data['jamkerl28'] = $this->Model_line28->cari_jamker();
        $data['smvl28'] = $this->Model_line28->cari_smv();
        $data['menpowerl28'] = $this->Model_line28->cari_menpower();
        $data['list_defect'] = $this->Model_line28->cari_listdefect();
        $data['link_gambar'] = $this->Model_line28->cari_link_gambar();
        $data['positiondefect'] = $this->Model_line28->cari_positiondefect();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('line28/landingpage4', $data);
        $this->load->view('templates/footer', $data);
        // redirect('landingpage');
        // redirect('landingpage/index');
    }


    public function block_page()
    {
        $this->load->view('block_page/block_page');
    }
}