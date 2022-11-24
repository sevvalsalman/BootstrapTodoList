<!DOCTYPE html>
<html>
    <head>
        <title>EDİT</title>
    </head>
<body>
    <div class="card" style="margin: 20px;">
        <div class="card-header">YAPILACAKLAR LİSTESİ DÜZENLEME</div>
        <div class="card-body">
            <form action="{{route('update',$todo->id)}}" method="post">
                @csrf

                <input type="hidden" name="id" id="id" value="{{$todo->id}}"  />
                <label>Liste</label></br>

            </form>

          </div>
        </div>

        <input type="submit" value="Güncelle" class="btn btn-success"></br>


</body>
</html>







