<html>
    <head>
        //---HTML Head Part
    </head>
    <body>
      
        @foreach ($noms as $nom)
            {{ $nom->name }}
        @endforeach
        @stop
    </body>
</html>