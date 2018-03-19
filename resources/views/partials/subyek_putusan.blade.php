<div class="row">
	<div class="box-body">
		<div class="col-xs-12">
			<table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="30%">Nama Lengkap</th>
                        <th width="40%">Uraian Singkat Perbuatan</th>
                        <th >Keterangan</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $k => $r)
                    <tr>
                        <td  width="30%">
                            {{--  <span class="label bg-green pull-right">Jaksa</span>
                            <span class="label bg-blue pull-right">staf</span>  --}}
                            <strong>{{ $r->nama}}</strong>
                            {{--  [Prof. Dr.] Nama Lengkap [SH., MH]  --}}
                            <br>
                            {{ $r->pangkat_nip_nrp_jabatan }}
                            {{--  [Jabatan] - [Kejaksaan...]  --}}
                        </td  width="40%">
                        <td>{{ $r->uraian }}</td>
                        <td>{{ $r->keterangan }}</td>
                        <td>
                            <div class="btn-group pull-right" role="group" aria-label="...">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-{{$k}}">
                                <i class="fa fa-eye"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade bs-example-modal-lg" id="modal-{{$k}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">
                                                <h2>
                                                    <i class="fa fa-user"></i>
                                                    {{--  [Prof. Dr.] Nama Lengkap [SH., MH]  --}}
                                                    {{ $r->nama }}
                                                </h2>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-sm-12 invoice-col">
                                                {{--  <span class="label bg-green pull-right">Jaksa</span>  --}}

                                                <p>
                                                    {{ $r->pangkat_nip_nrp_jabatan }}
                                                    {{--  [Pangkat] - [NIP] - [NRP] - [Jabatan] pada [Kejaksaan...]  --}}
                                                </p>
                                                <p>
                                                    <strong>Uraian Singkat Perbuatan:</strong><br>
                                                    {{ $r->uraian }}
                                                </p>
                                                <p>
                                                    <strong>MELANGGAR PASAL:</strong><br>
                                                    {{ $r->pasal }}
                                                </p>
                                                <p>
                                                    <strong>HUKUMAN DISIPLIN YANG DIJATUHKAN:</strong><br>
                                                    {{ $r->hukuman }}
                                                </p>
                                                <p>
                                                    <strong>KEPUTUSAN: </strong>
                                                    <i class="text-info">
                                                        {{ $r->keputusan_pejabat }} No. {{ $r->keputusan_nomor_tanggal }}
                                                    </i>
                                                </p>
                                                <p>
                                                    <strong>PELAKSANAAN HUKUMAN: </strong>
                                                    <i class="text-info">{{ $r->keputusan_pelaksanaan }}</i>
                                                </p>
                                                <p><strong>SELESAI: </strong><i class="text-info">{{ $r->selesai }}</i></p>
                                                <p><strong>KETERANGAN: </strong><i class="text-info">{{ $r->keterangan }}</i></p>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Uraian Singkat Perbuatan</th>
                        <th>Keterangan</th>
                        <th>Tindakan</th>
                    </tr>
                </tfoot>
            </table>
		</div>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.row-box-body -->

