<x-app>

    <x-layout.section-header title="DATA AKUN ADMIN dan MASTER" />

    <!-- Modal Tambah Data -->
    <x-modal.modal id="tambah" action="{{ url('akun-admin/create') }}">
        <x-modal.header title="TAMBAH KABUPATEN" />
        <x-modal.body>
            <x-form.input type="text" label="Nama Admin" name="name" placeholder="Masukan nama admin ..." />
            <x-form.input type="text" label="Email" name="email" placeholder="Masukan email admin ..." />

            <select id="" name="level" class="form-control mt-3" required >
                <option value="" hidden> --Pilih Level Akun--</option>
                <option value="0">Admin Dapil</option>
                <option value="1">Master Akun</option>
            </select>


             <select id="" class="form-control mt-3" required name="voting_zone_id">
                <option value="" hidden> --Pilih Dapil Akun--</option>
                @foreach($list_dapil as $item)
                <option value="{{$item->voting_zone_id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </x-modal.body>
        <x-modal.footer>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
            <button type="button" class="btn btn-primary">SIMPAN</button>
        </x-modal.footer>
    </x-modal.modal>
    <!-- ENDModal Tambah Data -->

    <div class="row">
        <div class="col-md-12">
            <x-card.card>
                <x-card.header>
                    <x-button.btn url="#tambah" icons="plus" class="success" modal />
                </x-card.header>
                <x-card.body>
                    <table class="table">
                    <thead>
                        <tr>
                            <th><center>#</center></th>
                            <th><center>Aksi</center></th>
                            <th><center>Nama Akun</center></th>
                            <th><center>Email</center></th>
                            <th><center>Dapil</center></th>
                            <th><center>Dibuat Oleh</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_akun as $item)
                        <tr>
                            <td><center>{{$loop->iteration}}</center></td>
                             <x-table.td-action x-data="modal">
                                            <x-button.btn url="#lihat" icons="eye" class="warning" modal />
                                            <x-button.btn url="#edit" icons="pencil-square" class="primary" modal />
                                            <x-button.btn url="{{url('master-data/data-kabupaten',$item->city_id)}}/delete" icons="trash" class="danger" />
                                            </x-table.td-action>
                            <td><center>{{ucwords($item->name)}}</center></td>
                            <td><center>{{ucwords($item->email)}}</center></td>
                            <td><center>{{ucwords($item->zones->name ?? 'Default')}}</center></td>
                            <td><center>{{ucwords($item->adminLog->name ?? 'Default')}} <br> {{$item->created_at}}</center></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                           <th><center>#</center></th>
                           <th><center>Aksi</center></th>
                           <th><center>Kecamatan</center></th>
                           <th><center>Dapil</center></th>
                           <th><center>Kabupaten</center></th>
                           <td>

                           </td>
                       </tr>
                   </tfoot>
               </table>
                            </x-card.body>
                        </x-card.card>
                    </div>
                </div>
            </x-app>
