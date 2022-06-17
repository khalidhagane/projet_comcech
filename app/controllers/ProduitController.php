<?php 
class ProduitController extends Controller{
    function __construct(){

        $this->produitModel = $this->model('ProduitModel'); 
    }

    
    public function addProduit(){
         $data = $_POST;

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//         $data = [
//             'produit' => trim(htmlspecialchars($_POST['produit'])),
//             'poid' => trim(htmlspecialchars($_POST['poid'])),
//             'tension' => trim(htmlspecialchars($_POST['tension'])),
//             'puissance' => trim(htmlspecialchars($_POST['puissance'])),
//             'longueur' => trim(htmlspecialchars($_POST['longueur'])),
//             'prix' => trim(htmlspecialchars($_POST['prix'])),
//             'description' => trim(htmlspecialchars($_POST['description'])),
//             'categure' => trim(htmlspecialchars($_POST['categure'])),
//             'image' => ($_FILES['img']['name']),
//         ];

        // $img = ($_FILES['img']['name']);
        
        // $terget_img = dirname(APPROOT) . "/public/img/image_produit/" . $_FILES['img']['name'];
        // move_uploaded_file($_FILES['img']['tmp_name'], $terget_img);

        $this->produitModel->addProduit($data);

       
        redirect("/pages/table_produits");
    // }else{
    //     $data = [
    //         'produit' => '',
    //         'poid' => '',
    //         'tension' => '',
    //         'puissance' => '',
    //         'longueur' => '',
    //         'prix' => '',
    //         'description' => '',
    //         'categure' => '',
    //         'image' => '',
            
    //     ];
    //     redirect("/pages/table_produits");
    // }
}

    public function affichage_produit(){
        
         $data =  $this->produitModel->affichage_produit();
        
        
        
    }
    
    public function delete_produit($id){
        
        $this->produitModel->delete_produit($id);
        
        redirect("/pages/table_produits");
    } 

    public function update_produit($id){
     
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $produit = $this->produitModel->get_produit($id);
            $this->view('pages/update_produit',(array) $produit);

         }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =  $_POST;
            $this->produitModel->update_produit($data,$id);
            redirect('/pages/table_produits');
         }
        }
}
?>