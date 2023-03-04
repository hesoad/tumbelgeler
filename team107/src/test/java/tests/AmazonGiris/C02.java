package tests.AmazonGiris;

import Utilities.ConfigReader;
import Utilities.Driver;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.interactions.Actions;
import org.testng.Assert;
import org.testng.annotations.Test;
import page.AmazonPage;

public class C02 {
    @Test
    public void amazonAlisveris(){
        //Amazonda oturum acma
        AmazonPage amazonPage= new AmazonPage();
        Driver.getDriver().get(ConfigReader.getProperty("amazonUrl"));

        //Uygulama: Amazon Alışveriş
        //Amaç: Bir urun arama, ucuncu urunu secme
        //Adımlar:
        //1.Amazon Alışveriş uygulamasını açın.
        //2.sayfanın altında yer alan "Çerezleri Kabul Etme" kutucuğundaki işareti secin.
        //3.Arama çubuğuna "ble" yazın ve arama yapın.

        amazonPage.aramaKutusu.sendKeys("bicycle"+ Keys.ENTER);

        amazonPage.angeboteDesTages.click();
        Actions actions=new Actions(Driver.getDriver());
       actions.click(amazonPage.PrimePrograms)
               .sendKeys(Keys.TAB)
               .sendKeys(Keys.SPACE)
               .sendKeys(Keys.TAB)
               .sendKeys(Keys.SPACE)
               .sendKeys(Keys.TAB)
               .sendKeys(Keys.SPACE).perform();


       amazonPage.todaysdealsilkUrun.click();


       //amazonPage.signIn.sendKeys(ConfigReader.getProperty("negatifgirisEmail=")+Keys.ENTER);

       // Assert.assertTrue(amazonPage.errorKutusu.isDisplayed());
        Driver.closeDriver();




    }
}
