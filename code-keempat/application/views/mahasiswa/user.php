<h1>Ini Halaman User</h1>
<h1>Hello, <?= $this->session->userdata('level');?>!</h1>
<a href="<?= base_url().'login/logout';?>">Logout</a>
