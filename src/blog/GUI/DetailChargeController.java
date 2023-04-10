/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package blog.GUI;

import blog.Entities.Charge;
import blog.Entities.Fournisseur;
import blog.Entities.Materiel;
import blog.Services.ChargeService;
import blog.Services.FournisseurService;
import blog.Services.MaterielService;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;

/**
 * FXML Controller class
 *
 * @author Ahmed Ben Abid
 */
public class DetailChargeController implements Initializable {

    @FXML
    private Button homeButton;

    @FXML
    private Button arrièreDetailCh;

    @FXML
    private Label labidCh;

    @FXML
    private Label labfCh;

    @FXML
    private Label labmatCh;

    @FXML
    private Label labdaCh;

    @FXML
    private Label labqtCh;

    @FXML
    private Button suppCh;

    @FXML
    private Button modifCh;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    //l fournisseur li bch nabaathouh lel detail
    public void setFournisseur(Charge fournisseur) {
        labidCh.setText(String.valueOf(fournisseur.getId()));
        labfCh.setText(fournisseur.getFournisseur_id());
        labmatCh.setText(fournisseur.getMateriel_id());
        labdaCh.setText(fournisseur.getDate_arrivage_charge());
        labqtCh.setText(String.valueOf(fournisseur.getQuantite_charge()));
    }

    @FXML
    private void puser(javafx.event.ActionEvent event) throws IOException {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("../GUI/backOfficeHome.fxml"));
        Parent root = loader.load();
        homeButton.getScene().setRoot(root);

    }

    @FXML
    private void returnListCh(javafx.event.ActionEvent event) throws IOException {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("../GUI/ListCharge.fxml"));
        Parent root = loader.load();
        arrièreDetailCh.getScene().setRoot(root);

    }

    @FXML
    private void suppF(javafx.event.ActionEvent event) throws IOException, SQLException {
        // Create a confirmation dialog
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Supprimer Charge");
        alert.setHeaderText("Êtes vous sur ,supprimer cette Charge ?");
        alert.setContentText("Cette action est requise.");

        // Show the confirmation dialog and wait for the user's response
        Optional<ButtonType> result = alert.showAndWait();

        // If the user clicks "OK", delete the fournisseur
        if (result.get() == ButtonType.OK) {
            ChargeService fs = new ChargeService();
            fs.delete(Integer.parseInt(labidCh.getText()));
            FXMLLoader loader = new FXMLLoader(getClass().getResource("../GUI/ListCharge.fxml"));
            Parent root = loader.load();
            suppCh.getScene().setRoot(root);
        } else {
            // Close the dialog and do nothing
            alert.close();
        }

    }

    @FXML
    private void handleModifierF() throws SQLException {
        // Get the values from the labels in the current scene
        String id = labidCh.getText();
        String nom = labfCh.getText();
        String contact = labmatCh.getText();
        String email = labdaCh.getText();
        String adresse = labqtCh.getText();
        ChargeService cs = new ChargeService();
        FournisseurService fs= new FournisseurService();
        MaterielService ms =new MaterielService();
    int  elementF =  Integer.parseInt(cs.getOneByIdd(Integer.parseInt(id)).getFournisseur_id());
 int  elementM =  Integer.parseInt(cs.getOneByIdd(Integer.parseInt(id)).getMateriel_id());
Fournisseur four =fs.getOneById(elementF);
Materiel mat = ms.getOneById(elementM);
        // Load the "ModifFournisseur.fxml" file
        FXMLLoader loader = new FXMLLoader(getClass().getResource("ModifCharge.fxml"));
        try {
            Parent root = loader.load();
            ModifChargeController controller = loader.getController();
            // Set the text fields in the "ModifFournisseur.fxml" file with the values from the labels
            controller.setIdM(Integer.parseInt(id));
            controller.tfqtChModif.setText(adresse);
            controller.setDateM(email);
            controller.setFournisseurCh(nom);
            controller.setMaterielCh(contact);
            controller.comboF.setValue(four);
            controller.comboM.setValue(mat);
            // Show the "ModifFournisseur.fxml" file in a new stage
            Scene scene = modifCh.getScene();
            scene.setRoot(root);
            System.out.println(controller.getIdM());
            System.out.println(controller.getDateM());
            System.out.println(controller.getFournisseurCh());
            System.out.println(controller.getMaterielCh());

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
