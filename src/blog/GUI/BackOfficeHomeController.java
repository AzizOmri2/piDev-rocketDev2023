/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package blog.GUI;

import blog.Services.soundService;
import java.io.File;
import javafx.scene.media.Media;
import java.io.IOException;
import java.net.URL;
import javafx.util.Duration;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.media.MediaPlayer;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author Ahmed Ben Abid
 */
public class BackOfficeHomeController implements Initializable {

    @FXML
    private Button FournisseurButton;
    @FXML
    private Button btnQuitter;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url1, ResourceBundle rb) {

    }

    public void playSound(String fileName) {

        String path = getClass().getResource(fileName).getPath().replace("%20", " ");
        Media media = new Media(new File(path).toURI().toString());
        MediaPlayer mediaPlayer = new MediaPlayer(media);
    mediaPlayer.setStopTime(Duration.seconds(1.8));


        mediaPlayer.play();

    }

    @FXML
    private void GoToFournisseur(javafx.event.ActionEvent event) throws IOException {

        soundService ss = new soundService();
        ss.btn2();
        FXMLLoader loader = new FXMLLoader(getClass().getResource("../GUI/GestionRessource.fxml"));
        Parent root = loader.load();

        FournisseurButton.getScene().setRoot(root);

    }

    @FXML
    private void handleQuitter(ActionEvent event) {
        
        // Obtenez la fenêtre principale
        Stage stage = (Stage) btnQuitter.getScene().getWindow();
        // Fermez la fenêtre
        stage.close();
    }

}
