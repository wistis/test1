<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Объекты</title>
    <style>
        @font-face {
            font-family: "DejaVu Sans";
            font-style: normal;
            font-weight: 400;
            src: url("/fonts/dejavu-sans/DejaVuSans.ttf");
            /* IE9 Compat Modes */
            src:
                    local("DejaVu Sans"),
                    local("DejaVu Sans"),
                    url("/fonts/dejavu-sans/DejaVuSans.ttf") format("truetype");
        }
        body {
            font-family: "DejaVu Sans";
            font-size: 12px;
        }
    </style>
</head>
<body>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           комапния  {{ $user->getCompany->name }}
        </h2>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Список пользователей</h2>  
                    <table class="table table-bordered">
                      @foreach($user->childrens as $child)
                          @include('users.table_tr',['child'=>$child])
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

