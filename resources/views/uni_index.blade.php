@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-sm-11"><h2>Controle de Unidades</h2></div>
        <div class="col-sm-1">
            <br>
            <button class="btn btn-danger" data-toggle="modal" data-target="#add">
                <span class="glyphicon glyphicon-plus"></span>
                Adicionar
            </button>
        </div>
    </div>
    <div class="row">
            <div class="table-responsive">          
                    <table class="table">              
                      <tbody>
        @forelse ($unidade as $i)        
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->uni_nome}}</td>
                    <td>{{$i->uni_sendmail}}</td>
                    <td>{{$i->uni_sms}}</td>
                    <td>{{$i->uni_logo_url}}</td>
                    <td>{{$i->user}}</td>                    
                    <td><a href="" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></a></span></td>
                    <td><a href="" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>            
        @empty
            Nada Cadastrado!
        @endforelse
    </tbody>
</table>
</div>
    </div>
    <!-- MODAL ADD UNIDADE-->
    <div id="add" class="modal fade" role="dialog">
            <div class="modal-dialog">
          
              <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Adicionar unidades</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body"> 
                        <div class="form-group @if($errors->first('uni_nome')) alert alert-danger @endif">
                                <label for="uni_nome">Unidade:</label>
                                <input type="text" class="form-control" name="uni_nome" placeholder="Nome da Unidade">
                                @if ($errors->first('uni_nome'))                            
                                <span>*{{$errors->first('uni_nome')}}</span>                                      
                            @endif  
                            </div>                            
                            <div class="form-group @if($errors->first('uni_sendmail')) alert alert-danger @endif">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" name="uni_sendmail">                                
                                <p class="text-danger">*Conta utilizada para envio de e-mail pelo sistema.</p>
                                <p class="text-danger">*Somente Domínio @lasalle.org.br</p>
                                @if ($errors->first('uni_sendmail'))                                    
                                        <span>*{{$errors->first('uni_sendmail')}}</span>                                    
                                @endif
                            </div>                            
                            <div class="form-group @if($errors->first('uni_sms')) alert alert-danger @endif">
                                <label for="text">Chave do <a href="https://smsgateway.me/" target="blank">Sms gateway Me</a>:</label>
                                <input type="text" class="form-control" name="uni_sms">                                
                                @if ($errors->first('uni_sms'))
                                        
                                            <span>{{$errors->first('uni_sms')}}</span>
                                        
                                    @endif
                            </div>
                            <div class="form-group @if($errors->first('uni_logo_url')) alert alert-danger @endif">
                                <label for="uni_logo_url">Logo da unidade:</label>
                                <input type="file" class="form-control" name="uni_logo_url">
                                @if ($errors->first('uni_logo_url'))                               
                                    <span>{{$errors->first('uni_logo_url')}}</span>                                      
                                @endif
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar</button>
                        </div>
                    </form>
                </div>          
            </div>
          </div>
          @if ($errors->any())
          <script>
            $("#add").modal()
          </script>
        @endif
@endsection