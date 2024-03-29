<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class FilterController extends Controller
{
    function index()
    {
     return view('filter');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {           
       $data = DB::table('produits')
       	 ->join('categories', 'produits.categories_id', '=', 'categories.nom_categorie')
       	 ->select('produits.*', 'categories.nom_categorie AS cat_name')
         ->where('cat_name', 'like', '%'.$query.'%')
         ->orderBy('produits.compteur_produit', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('produits')
         ->orderBy('compteur_produit', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '<tr>
         <td>'.$row->nom_produit.'</td>
         <td>'.$row->description_produit.'</td>
         <td>'.$row->quantite_produit.'</td>
         <td>'.$row->prix_produit.'</td>
        </tr>
   ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Pas de résultat</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
