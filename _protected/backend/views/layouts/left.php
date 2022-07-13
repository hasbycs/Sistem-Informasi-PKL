<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],           		
                'items' => [
                	
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    //['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Beranda', 'icon' => 'home', 'url' => ['site/index']],
                    [
                				'label' => 'Master Data',
                				'icon' => '  fa-book',
                				'url' => '#',
                				'items' => [                						
                						['label' => 'Mahasiswa', 'icon' =>' fa-users','url'=>['/mahasiswa'],'visible' =>Yii::$app->user->identity->role==1],
                						['label' => 'Dosen', 'icon' =>' fa-users','url'=>['/dosen'],'visible' =>Yii::$app->user->identity->role==1],
                						['label' => 'Instansi\Perusahaan ', 'icon' =>'  fa-industry','url'=>['/tempatpkl'],'visible' =>Yii::$app->user->identity->role==1],
                						['label' => 'Data Pendaftaran PKL ', 'icon' =>'   fa-bookmark','url'=>['/pendaftaran'],'visible' =>Yii::$app->user->identity->role==1],
                						['label' => 'Dosen Pembimbing', 'icon' =>'  fa-user','url'=>['/datapembimbing'],'visible' =>Yii::$app->user->identity->role==1],
                					    ['label' => 'Sidang', 'icon' =>'  fa-desktop','url'=>['/sidang'],'visible' =>Yii::$app->user->identity->role==1],
                                                                
                                            ],],
                    [
                				'label' => 'Rekapan Data',
                				'icon' => 'print',
                				//'visible' =>Yii::$app->user->identity->role==1,
                				'url' => '#',
                				'items' => [
                						['label' => 'Data Pembimbing PKL', 'icon' =>'  fa-database','url'=>['/laporan'],'visible' =>Yii::$app->user->identity->role==1],
                						['label' => 'Data Jadwal Sidang', 'icon' =>'  fa-database','url'=>['/rekaps'],'visible' =>Yii::$app->user->identity->role==1],
                						['label' => 'Data Judul Laporan PKL', 'icon' =>'  fa-database','url'=>['/laporanpkl'],'visible' =>Yii::$app->user->identity->role==1],
                						
                   ],],
                     [
                				'label' => 'Set Data',
                				'icon' => '  fa fa-gears',
                				//'visible' =>Yii::$app->user->identity->role==1,
                				'url' => '#',
                				'items' => [
                						['label' => 'Data Kelas', 'icon' =>'  fa-bank','url'=>['/kelas'],'visible' =>Yii::$app->user->identity->role==1],              						   						                						
                						['label' => 'Lokal Sidang', 'icon' =>'  fa-bank','url'=>['/ruangsidang'],'visible' =>Yii::$app->user->identity->role==1],         		                                       
                						['label' => 'Tahun Periode Kaprodi', 'icon' =>'  fa-circle-o-notch','url'=>['/angkatan'],'visible' =>Yii::$app->user->identity->role==1],
                						['label' => 'Angkatan', 'icon' =>'  fa-circle-o-notch','url'=>['/tahunbp'],'visible' =>Yii::$app->user->identity->role==1], 
                                        ['label' => 'User', 'icon' =>'  fa-user','url'=>['/user'],'visible' =>Yii::$app->user->identity->role==1],
                						['label' => 'Provinsi', 'icon' =>'   fa-map-pin','url'=>['/provinsi'],'visible' =>Yii::$app->user->identity->role==1], 
                						 
                   ],],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                
                ],
            ]
        ) ?>

    </section>

</aside>
