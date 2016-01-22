@extends('layout.default')

@section('content')
<div style="height:100%;" class="container">
    <div class="row">
        <div style="border-right: 1px solid #000" class="col-xs-3 col-md-4 col-lg-3">
            <div style="margin-bottom:1em; height:28em;">
                <img style="margin: auto;border-radius: 25px;" class="img-rounded img-responsive" src="http://placehold.it/210x210">
                <div style="margin-top:25px; margin-left: 21px;height: 50%;">
                    <img class="img-circle" src="http://placehold.it/70x70">
                    <img class="img-circle" src="http://placehold.it/70x70">
                    <img class="img-circle" src="http://placehold.it/70x70">
                    <img class="img-circle" src="http://placehold.it/70x70">
                    <img class="img-circle" src="http://placehold.it/70x70">
                    <img class="img-circle" src="http://placehold.it/70x70">
                </div>
            </div>
            <div style="height:21em; border-top:1px solid #000;padding-top: 15px; padding-left: 10px;">
                <button style="background-color: purple;" type="button" class="tags btn btn-default">
                    # Java
                </button>
                <button style="background-color: orange;" type="button" class="tags btn btn-default">
                    # Android
                </button>
                <button style="background-color: red;" type="button" class="tags btn btn-default">
                    # PHP
                </button>
                <button style="background-color: lightcoral;" type="button" class="tags btn btn-default">
                    # IOS
                </button>
                <button style="background-color: blue;" type="button" class="tags btn btn-default">
                    # Cisco
                </button>
                <button style="background-color: green;" type="button" class="tags btn btn-default">
                    # Linux
                </button>
            </div>
        </div>
        <div>
       <div class="col-xs-4 col-md-4 col-lg-9 vcenter">
            <div style="margin-bottom:1em;height:28em;">
                <div style='width:100%; border:1px solid black;'>
                    <form class="form-disable">
                    <textarea placeholder="Bericht plaatsen..." style='resize: none; border-style:none none dashed none; border-color:black; width:100%; height:6em; display:block;box-sizing:border-box;border-width:1px; margin-bottom:1px;'></textarea>
                    <div style='background-color: #e1e1e1; width:100%; box-sizing:border-box; height:35px;padding:5px;'>
                        <button type="submit" class="button-link">
                            Bevestig
                        </button>
                        <button type="submit" class="button-link">
                            <i class="glyphicon glyphicon-picture"></i> Foto Toevoegen
                        </button>
                    </div>
                    </form>
                </div>
                <div>
                    <br>
                    <p><a href="http://www.stichting-scn.nl/">Stichting Landelijke Federatie SCN</a> heeft een nieuwe post geplaatst <br> 41 min. geleden. </p>
                    <img style="height: 200px; width: 470px; margin:auto;" class="img-responsive img-rounded" src="http://www.stichting-scn.nl/img/jaarlid.png">
                </div>
            </div>
        </div>
        <div class="col-xs-3 col-md-4 col-lg-9 vcenter">
            <div style="height:21em;border-top:1px solid #000;padding-top: 10px;">
                <p><a href="http://www.google.nl">Google</a><br>1 uur geleden.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
            </div>
        </div>
    </div>
</div>
@stop
