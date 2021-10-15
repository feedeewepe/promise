<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KerjaPraktek extends BaseController
{
	public function index()
	{
		//
	}

	public function daftarKP()
	{
		$fakultas = model(FakultasModel::class);
		
		$data = [
            'title' => 'Kerja Praktek - Daftar',
            'usergroup' => $this->userGroup,
			'fakultas' => $fakultas->get_all_data(),
        ];
		return view('kerjapraktek/daftar', $data);
	}

	public function prodiFakultas(){
		$prodi = model(ProdiModel::class);		
		if ($this->request->isAJAX()) {
			$id = $this->request->getVar('fakultasid');
			echo json_encode($prodi->get_prodi_fakultas($id));
		} else {
			exit('404 Not Found');
		}
		
	}

	public function daftar(){
		$rules = [
			'nimketua'  	=> 'required',
			'namaketua'		=> 'required',
			'tlpketua'	 	=> 'required',
			'emailketua' 	=> 'required|valid_email',
			'fakultas' 		=> 'required',
			'prodi'			=> 'required',
			'namainstansi'  => 'required',
			'alamatinstansi'  => 'required',
			'tlpinstansi'  => 'required',
		];
		if (! $this->validate($rules))
		{
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}
		$allowedPostFields = [
			'nimketua','namaketua','tlpketua','emailketua',
			'nimanggota1','namaanggota1','tlpanggota1','emailanggota1',
			'nimanggota2','namaanggota2','tlpanggota2','emailanggota2',
			'fakultas','prodi','namainstansi','alamatinstansi','tlpinstansi'];		
		$var = $this->request->getPost($allowedPostFields);
		var_dump($var);die;
	}
}
