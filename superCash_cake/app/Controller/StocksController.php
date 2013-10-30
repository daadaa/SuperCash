<?php

class StocksController extends AppController{
	public $uses = array('Magasin','Fournisseur', 'Lot', 'Factures_fournisseur','Produit');
	function index() {
		
	}
	function ajout_facture(){
		$fournisseurs = $this->Fournisseur->find('list',array(
			'fields' => array('nom')
			));
		$this->set('fournisseurs', $fournisseurs);	
		
		$magasins = $this->Magasin->find('list',array(
			'fields' => array('ville')
			));
		$this->set('magasins', $magasins);

		if($this->request->is('post')){
			debug($this->request->data);
			$magasin_id = $this->request->data['Factures_fournisseur']['magasin_id'];
			if ($this->Factures_fournisseur->save($this->request->data)) {
					$Factures_fournisseurID = $this->Factures_fournisseur->id; 
					$this->Session->setFlash('Votre reference de facture a ete sauvegarde.');
					$this->redirect(array('action' => 'edit_facture/'.$Factures_fournisseurID.'/'.$magasin_id));
				} else {
					$this->Session->setFlash('Impossible d\'ajouter votre reference de facture.');
			}
		}
	}

	function edit_facture($idF=null, $idM=null){
		$this->set('facture',$idF);
		$this->set('magasin', $idM);
		$produits = $this->Produit->find('list',array(
			'fields' => array('nom'),
			'conditions' => array('magasin_id' => $idM)
			));
		$this->set('produits', $produits);	
		$produitsFacture = $this->Lot->find('all',array(
			'conditions' => array('factures_fournisseur_id' => $idF)
			));
		$produitsFacture = $this->Lot->find('all', array(
				    'joins' => array(
				        array(
				            'table' => 'produits',
				            'alias' => 'ProduitJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'ProduitJoin.id = Lot.produit_id'
				            )
				        ),
				    ),
				    'conditions' => array(
				        'Lot.factures_fournisseur_id' => $idF
				    ),
				    'fields' => array('ProduitJoin.*', 'Lot.*')
				));
		$this->set('produitsFacture', $produitsFacture);

		if($this->request->is('post')){
			$idP = $this->request->data['Lot']['produit_id'];
			$q = $this->request->data['Lot']['quantite_pack'];
			$f = $this->request->data['Lot']['format'];
			$quantiteAdd=$q*$f;
			$quantiteInitial = $this->Produit->find('first',array(
					'conditions' => array('id' => $idP),
					'fields' => array('quantite')
				));
			//debug($quantiteInitial);
			$quantiteInitial = $quantiteInitial['Produit']['quantite'];
			$quantiteFinal = $quantiteInitial+$quantiteAdd;
			// echo $quantiteInitial;
			// echo $quantiteAdd;
			//debug($quantiteFinal);
			if ($this->Lot->save($this->request->data)) {
					$this->Produit->id=$idP;
					$this->Produit->saveField('quantite',$quantiteFinal);
					$this->Session->setFlash('Votre reference de facture a ete sauvegarde.');
					$this->redirect(array('action' => 'edit_facture/'.$idF.'/'.$idM));
				} else {
					$this->Session->setFlash('Impossible d\'ajouter votre reference de facture.');
			}
		}
	}
	public function suppr_lot($id){
		$resLot = $this->Lot->find('all', array(
				    'joins' => array(
				        array(
				            'table' => 'produits',
				            'alias' => 'ProduitJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'ProduitJoin.id = Lot.produit_id'
				            )
				        ),
				    ),
				    'conditions' => array(
				        'Lot.id' => $id
				    ),
				    'fields' => array('ProduitJoin.magasin_id', 'Lot.factures_fournisseur_id','ProduitJoin.id','Lot.quantite_pack','Lot.format')
			));
		debug($resLot);
		$idP=$resLot['0']['ProduitJoin']['id'];
		$idF=$resLot['0']['Lot']['factures_fournisseur_id'];
		$q=$resLot['0']['Lot']['quantite_pack'];
		$f=$resLot['0']['Lot']['format'];
		$quantiteSuppr=$q*$f;
		$idM=$resLot['0']['ProduitJoin']['magasin_id'];
		$quantiteInitial = $this->Produit->find('first',array(
					'conditions' => array('id' => $idP),
					'fields' => array('quantite')
				));
		$quantiteInitial=$quantiteInitial['Produit']['quantite'];
		$quantiteFinal=$quantiteInitial-$quantiteSuppr;

		if ($this->Lot->delete($id)) {
			$this->Produit->id=$idP;
			$this->Produit->saveField('quantite',$quantiteFinal);	
			$this->Session->setFlash('Votre produit a ete supprime.');
			$this->redirect(array('action' => 'edit_facture/'.$idF.'/'.$idM));
		} else {
			$this->Session->setFlash('Impossible de supprimer le produit.');
		}
	}
}

?>