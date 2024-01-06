<!-- Main Sidebar Container -->
<?php

use Illuminate\Support\Facades\Auth;

$user_level = Auth::user()->level;
$is_developer = (int) $user_level === 2;
$is_admin = (int) $user_level <= 2;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL::to('backoffice') }}" class="brand-link">
        <img src="{{ asset('/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>  {{ $user->name }}</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="/" class="d-block">{{ $user->name }}</a>
            </div>
        </div> -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">Dashboard Menu</li>
                <li class="nav-item">
                    <a href="{{ URL::to('backoffice') }}" class="nav-link">
                        <i class="nav-icon 	fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php if ($is_developer) { ?>
                    <li class="nav-item">
                        <a href="{{ URL::to('deposit_bank') }}" class="nav-link">
                            <i class="nav-icon fa fa-credit-card"></i>
                            <p>
                                Data Bank
                            </p>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($is_admin) { ?>
                    <li class="nav-header">Data Payment</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-balance-scale-left"></i>
                            <p>
                                Payment
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <?php } ?>

                        <?php if ($is_developer) { ?>
                            <li class="nav-item">
                                <a href="{{ URL::to('deposit') }}" class="nav-link">
                                    <i class="fas fa-donate nav-icon"></i>
                                    <p>Deposit</p>
                                </a>
                            </li>
                            <li class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('withdraw') }}" class="nav-link">
                                    <i class="fas fa-donate nav-icon"></i>
                                    <p>Withdraw</p>
                                </a>
                            </li>
                            <?php } ?>

                            <?php if ($is_admin) { ?>
                            <li class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('pengaturan_saldo') }}" class="nav-link">
                                    <i class="fas fa-cash-register nav-icon"></i>
                                    <p>Pengaturan Saldo</p>
                                </a>
                            </li>

                            <li class="nav nav-treeview">

                                <a href="{{ URL::to('pernyataan') }}" class="nav-link">
                                    <i class="fab fa-bitcoin nav-icon"></i>
                                    <p>Pernyataan</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php } ?>

                <?php if ($is_developer) { ?>
                    <li class="nav-header">Profile Member</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-id-card"></i>
                            <p>
                                Member Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('data_member') }}" class="nav-link">
                                    <i class="fas fa-ghost nav-icon"></i>
                                    <p>Data Member</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('histori_transaksi') }}" class="nav-link">
                                    <i class="fas fa-eye nav-icon"></i>
                                    <p>Histori Transaksi</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                <?php } ?>

                <?php if ($is_developer) { ?>
                    <li class="nav-header">Setting View</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-fingerprint"></i>
                            <p>
                                Setting
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('setting') }}" class="nav-link">
                                    <i class="fas fa-tshirt nav-icon"></i>
                                    <p>Setting Web</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('game_api') }}" class="nav-link">
                                    <i class="fas fa-gamepad nav-icon"></i>
                                    <p>Game API</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('banner') }}" class="nav-link">
                                    <i class="fas fa-film nav-icon"></i>
                                    <p>Benner</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('banner_promosi') }}" class="nav-link">
                                    <i class="fas fa-bullhorn nav-icon"></i>
                                    <p>Promosi</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('bonus') }}" class="nav-link">
                                    <i class="fas fa-toilet-paper nav-icon"></i>
                                    <p>Bonus</p>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!-- luckyspin -->
                    <li class="nav-header">Fitur Permainan</li>

                    <li class="nav-item">
                        <a target="_blank" href="/" class="nav-link">
                            <i class="nav-icon fas fa-dice"></i>
                            <p>
                                Luckyspin
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('game_setting') }}" class="nav-link">
                            <i class="fas fa-gamepad nav-icon"></i>
                            <p>Game</p>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-header">Profile</li>
                <li class="nav-item">
                    <a href="{{ URL::to('profil_admin') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Profil Admin
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>