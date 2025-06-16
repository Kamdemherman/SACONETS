<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>facture</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
      table, th, td {
        border: 0.5px solid black;
      }
      table {
        width: 100%;
      }
    </style>

</head>
<body>
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card" style="margin-top: 150px">
                    <div class="card-body mt-20">
                      
                      {{-- <div> <img src="{{ asset('/dist/assets/img/logo_saconetsbr2.png') }}" style="width: 250px; height: 74px;"></div> --}}
                        <table  class="table table-bordered" style="font-size: 18px;">
                            <thead >
                              <tr>
                                <th>Client</th>
                                <th>Montant</th>
                                <th>Taxe (19,25%)</th>
                                <th>Date</th>
                                <th>Etat de la commande</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($orders as $type)
                              <tr>
                                
                                <td  >{{$type->user->name}}</td>
                                <td  >{{getPrix($type->montant)}} </td>
                                <td  >{{getPrix($type->tva)}} </td>
                                <td  >{{$type->order_date}}</td>
                                <td  >{{$type->etat}}</td>
                                  
                              </tr>                   
                              @endforeach
                            </tbody>
                          </table>

                        <div class="" style="margin-top: 50px;">
                            <div style="margin-right: 0px;margin-left: 50px;">
                                <p><strong style="font-size:20px">Saconete SA</strong></p>
                                <p></p>
                            </div>
                        </div>
                        
                    
                        
                        </div>

                        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    
</body>
</html>