@extends('pages.template')
    <div class="content">
        <div class="title m-b-md">
         Boissons et recettes
        </div>

@section('contenu')
        <table>
            <tr>
                <th>Boissons</th>
                <th>Codes</th>
                <th>Ingrédients</th>
                <th>Quantité</th>
            </tr>
                 @foreach ($zboub as $recipe)
            <tr>
                <td rowspan="2" >{{ $recipe['boisson'] }}</td> 
                <td rowspan="2" >{{ $recipe['code'] }}</td>
                @foreach ($recipe['ingrédients'] as $ing=>$value)
                <td>{{ $ing }}</td>
                <td>{{ $value}}</td>
            </tr>

            @endforeach 

         
            @endforeach
            

        </table>


    <form action="" method="post">
                    <select name="boisson">
                        <option selected disabled>Drink selection</option>
                        
                    </select>
                    <input type="submit" name="submit" value="ajouter une boisson">
                </form>


            </div>
        </div>
@endsection
