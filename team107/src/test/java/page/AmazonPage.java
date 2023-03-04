package page;

import Utilities.Driver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;
import org.openqa.selenium.support.PageFactory;

public class AmazonPage {


    public AmazonPage() {
        PageFactory.initElements(Driver.getDriver(), this);
    }
    @FindBy(id = "twotabsearchtextbox")
    public WebElement aramaKutusu;

    @FindBy(xpath = "//div[@class='a-section a-spacing-small a-spacing-top-small']")
    public WebElement aramasonucuKutusu;

    @FindBy(xpath = "(//div[@class='a-section a-spacing-base'])[1]")
    public WebElement ilkUrunElementi;

    @FindBy(xpath= "//a[@data-csa-c-slot-id='nav_cs_0']")
    public WebElement angeboteDesTages;

    @FindBy(xpath = "//h4[.='Prime programs']")
    public WebElement PrimePrograms;

    @FindBy(xpath = "(//img[@class='DealImage-module__imageObjectFit_1G4pEkUEzo9WEnA3Wl0XFv'])[1]")
    public WebElement todaysdealsilkUrun;

     @FindBy(xpath ="//input[@id='ap_email']" )
     public WebElement signIn;

    @FindBy(id = "auth-error-message-box")
    public WebElement errorKutusu;

    @FindBy(xpath = "//span[@id='submit.add-to-cart']")
    public WebElement addToCart;




}
