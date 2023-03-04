package tests.day11_POM_Assertions;

import org.openqa.selenium.Keys;
import org.testng.Assert;
import org.testng.annotations.Test;
import pages.AmazonPage;
import ultilities.ConfigReader;
import ultilities.Driver;

public class C01_ConfigReaderKullanimi {
    @Test
    public void tets01(){


        //amazona git
        Driver.getDriver().get(ConfigReader.getProperty("amazonUrl"));

        //nutelayi ara

        AmazonPage amazonPage=new AmazonPage();
        amazonPage.aramaKutusu.sendKeys(ConfigReader.getProperty("amazonAranacakKelime")+ Keys.ENTER);

        String expectedIcerik= ConfigReader.getProperty("amazonAranacakKelime");
        String actualAramaSonucuYazisi= amazonPage.aramaSonucElementi.getText();
        Assert.assertTrue(actualAramaSonucuYazisi.contains(expectedIcerik));
        Driver.closeDriver();
    }
}
