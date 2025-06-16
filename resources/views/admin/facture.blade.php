<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>facture</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fa fa-angle-right"></i> Détails de la commande de {{$details->user_name}} du {{$details->order_date}}. D'un montant de: <strong>{{getPrix($details->montant)}}</strong></h4>
                        <h5>Etat de la commande:{{$details->etat}}</h5>
                        <table class="table table-bordered table-striped table-condensed cf" style="font-size: 18px">
                            <thead class="cf">
                                <tr>
                                <th>Produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Taxe (19,25%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (unserialize($details->produits) as $produit)
                                <tr>
                                
                                <td data-title="Code" >{{$produit[0]}}</td>
                                <td data-title="Company" >{{getPrix($produit[1])}} </td>
                                <td data-title="Company" >{{$produit[2]}}</td>
                                    
                                </tr>                   
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td data-title="Company" >{{getPrix($details->tva)}}</td>   
                                </tr>
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