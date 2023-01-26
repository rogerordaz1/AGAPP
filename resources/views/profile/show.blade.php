@extends('layouts.adminlte')

@section('title', 'Roger')

@section('body')

    <div class="wrapper">



        @include('admin_components.navbar')

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            @include('admin_components.sidebar_top')


            <!-- Sidebar -->
            @include('admin_components.sidebar')
            <!-- /.sidebar -->


            
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pt-4">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @include('admin_components.cant_cards_row')

                    <x-app-layout>
                        <div>
                            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                    @livewire('profile.update-profile-information-form')
                    
                                    <x-jet-section-border />
                                @endif
                    
                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.update-password-form')
                                    </div>
                    
                                    <x-jet-section-border />
                                @endif
                    
                                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.two-factor-authentication-form')
                                    </div>
                    
                                    <x-jet-section-border />
                                @endif
                    
                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.logout-other-browser-sessions-form')
                                </div>
                    
                                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                                    <x-jet-section-border />
                    
                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.delete-user-form')
                                    </div>
                                @endif
                            </div>
                        </div>
                    </x-app-layout>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
   
@endsection



