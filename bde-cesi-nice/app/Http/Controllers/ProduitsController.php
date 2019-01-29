<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Produits;
//use App\Http\Controllers\Controller;

class ProduitsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produits::all()->sortByDesc('compteur_produit');
        return view('Boutique/Produits/shop')->withProduits($produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Boutique/Produits/create_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produits = new Produits;

        $produits->nom_produit = $request['titre'];
        $produits->description_produit = $request['description_produit'];
        $produits->quantite_produit = $request['quantite_produit'];
        $produits->prix_produit = $request['prix_produit'];
        

        

        $produits->save();

        return view('Boutique/Produits/create_article')->withProduits ($produits)->withUpdated('Article créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add_to_cart($id){
   
        $produit = Produits::select()->where('id', $id)->get('id');
        $produits = Produits::all();
       //Récupère tout l'enregistrement associé à ce produit
       //echo $produit[0];
       //Récupère l'id 
       //echo $produit[0]->id;

       $id = $produit[0]->id; //On récupère qu'un seul enregistrement donc on regarde directement à l'indice 0

       if(isset($_COOKIE['produit_id-'.$id])){  //Ce n'est pas le premier article ajouté

            /*
            * Il ne faut pas écraser les anciens cookies ajoutés au panier, pour cela on vérifie l'existance jusqu'à ce qu'on trouve plus une place
            */
            $i = 0;
            while(isset($_COOKIE['produit_id-'.$id.'_'.$i]))
            {
                $i++;
            }

            setcookie('produit_id-'.$id.'_'.$i, $id, time() + 30*24*3600, "/", null, false, true); //Accessible sur tout le répertoire /, donc tous le site
       
       }
       else {
            setcookie('produit_id-'.$id, $id, time() + 30*24*3600, "/", null, false, true); //Sinon c'est le premier article ajouté au panier
       }

       return view('Boutique/Produits/shop')->withProduits($produits)->withAddToCart('Produit ajouté au panier !');
    }

    public function cart() {

            $boolean_control = 0;

            foreach ($_COOKIE as $key => $value) {
                if(preg_match('/produit_id-[0-9]*(_[0-9]+)?/', $key)){
                    //C'est un cookie de produit panier
                    $list[] = $value;

                    $boolean_control = 1;
                }
            }

            if($boolean_control == 1) {
                
                $list = array_unique($list);

                if(count($list) >= 1){
                    $produits_add = Produits::find($list);  //$list[] est accessible en dehors du while !!?? Apparemment oui...
                    return view('Boutique/Panier/cart')->withProduits($produits_add);
                }
            }
            
            return view('Boutique/Panier/cart')->withNoProduct('AUCUN ARTICLE DANS LE PANIER');
    }

    public function delete_to_cart($id) {

        $keys = array_keys($_COOKIE, $id);

        foreach ($keys as $cookies_to_drop) {
            setcookie($cookies_to_drop, null, -1, '/'); // On expire le cookie
            unset($_COOKIE[$cookies_to_drop]);          // On l'efface du tableau
        }


        return $this->cart();
    }

    public function checkout(){
        return view('Boutique/Panier/checkout');
    }

}
