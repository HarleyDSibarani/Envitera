<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index(){
		$data  = array(
			"articles"=>[
				["judul"=>"Judul Arikel 1","tanggal"=>"2018/08/29","username"=>"@josesitanggang","kategori"=>"Perkotaan","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea atque dolore qui reiciendis neque, nihil praesentium, voluptas eaque veritatis tempora labore alias, deserunt exercitationem voluptatem minima optio dicta placeat! Harum iure similique alias libero, nemo molestiae cum aut consequatur eligendi.","media"=>"static/img/hero.jpg","link"=>"blog/view/judul1"],
				["judul"=>"Judul Arikel 2","tanggal"=>"2018/08/30","username"=>"@josesitanggang","kategori"=>"Perkotaan","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea atque dolore qui reiciendis neque, nihil praesentium, voluptas eaque veritatis tempora labore alias, deserunt exercitationem voluptatem minima optio dicta placeat! Harum iure similique alias libero, nemo molestiae cum aut consequatur eligendi.","media"=>"static/img/hero.jpg","link"=>"blog/view/judul1"],
				["judul"=>"Judul Arikel 3","tanggal"=>"2018/08/28","username"=>"@josesitanggang","kategori"=>"Pedesaan","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea atque dolore qui reiciendis neque, nihil praesentium, voluptas eaque veritatis tempora labore alias, deserunt exercitationem voluptatem minima optio dicta placeat! Harum iure similique alias libero, nemo molestiae cum aut consequatur eligendi.","media"=>"static/img/hero.jpg","link"=>"blog/view/judul1"]
			],
			"cuplikan"=>[
				["judul"=>"cuplikan 1","tanggal"=>"2018/08/28","username"=>"@josesitanggang","kategori"=>"Pedesaan","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea atque dolore qui reiciendis neque, nihil praesentium, voluptas eaque veritatis tempora labore alias, deserunt exercitationem voluptatem minima optio dicta placeat! Harum iure similique alias libero, nemo molestiae cum aut consequatur eligendi.","link"=>"blog/view/judul1"],
				["judul"=>"cuplikan 2","tanggal"=>"2018/08/28","username"=>"@josesitanggang","kategori"=>"Pedesaan","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea atque dolore qui reiciendis neque, nihil praesentium, voluptas eaque veritatis tempora labore alias, deserunt exercitationem voluptatem minima optio dicta placeat! Harum iure similique alias libero, nemo molestiae cum aut consequatur eligendi.","link"=>"blog/view/judul1"],
				["judul"=>"cuplikan 3","tanggal"=>"2018/08/28","username"=>"@josesitanggang","kategori"=>"Pedesaan","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea atque dolore qui reiciendis neque, nihil praesentium, voluptas eaque veritatis tempora labore alias, deserunt exercitationem voluptatem minima optio dicta placeat! Harum iure similique alias libero, nemo molestiae cum aut consequatur eligendi.","link"=>"blog/view/judul1"],
				["judul"=>"cuplikan 4","tanggal"=>"2018/08/28","username"=>"@josesitanggang","kategori"=>"Pedesaan","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea atque dolore qui reiciendis neque, nihil praesentium, voluptas eaque veritatis tempora labore alias, deserunt exercitationem voluptatem minima optio dicta placeat! Harum iure similique alias libero, nemo molestiae cum aut consequatur eligendi.","link"=>"blog/view/judul1"],
			]
		);
		$this->load->view('blog/index',$data);
	}

	public function view($judul=NULL){
		echo $judul;
	}
}