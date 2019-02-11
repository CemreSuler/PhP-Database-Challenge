## Het starten van de web-app
U kunt de app starten door bovenin op **Run Project** te drukken en daarna naar [de app](https://phpdatabase-cemre2002.c9users.io/) te gaan


# Nakijk instructies
Voor deze opdracht was het de bedoeling om een app te maken en daaraan een 
database te koppelen (dus een frontend en backend). 

Deze app moest de volgende dingen kunnen doen met de database:
1. Read (lezen)
2. Create (creëren)
3. Write (schrijven)
4. Delete (verwijderen)

Wij hebben de opdracht gemaakt met de database (over vliegtuigvluchten) die 
Cemre voor zijn vorige challenge heeft gemaakt. Hieraan hebben wij de 
functionaliteit om een account te maken toegevoegd. Dit hebben we gedaan, omdat
het eigenlijk wel hoort bij de database en omdat het alle bovenstaande vereiste 
combineert. Laten we gaan kijken naar de verwerking

    > De functies zijn voornamelijk met Google Chrome getest. De app 
    kan dus minder functioneren met een andere browser
    
    > (edit van Cemre Süler op 09/02/2019: Het werkt nu op elke browser, ik heb 
    wat meer javascript gebruikt (zie error_messages.js))
    
## Read (lezen)
De read functionaliteit kunt u op meerdere plekken terugvinden. Op de vluchten
pagina kunt u doormiddel van een form zoeken op vertrekken en aankomsten van vluchten. 

Op je persoonlijke pagina kun je ook je eigen gegevens bekijken (dit kan alleen
nadat u een account heeft gemaakt).

## Create (creëren)
Het aanmaken van een account bevat de create functie. Voor het maken van een 
account klikt u op account in het menu, vervolgens klikt u op registreer. Dan 
kunt u een account aanmaken door de benodigde gegevens in te vullen.

Bij het invullen checkt het systeem of de invoer correct is. Als dit niet zo is,
dan wordt er een error gegeven. 

## Write (schrijven)
Nadat u een account heeft aangemaakt, kunt u inloggen en dan komt u op uw 
persoonlijke pagina met de gegevens die van u bekend zijn. Onderaan kunt u op de
knop **bewerk je gegevens** klikken en dan kunt u uw gegevens bewerken.

## Delete (verwijderen)
Als laatste kunt u ook nog uw account verwijderen. Dit kan door weer op de 
**bewerk je gegevens** knop te klikken. Op de pagina waarop u dan terecht komt 
kunt u dan op **verwijder account** klikken. Uw zult dan een pop-up krijgen die
vraagt om uw bevestiging. Als u dan op **Ok** klikt dan is uw account met alle 
gegevens verwijderd. 

## Gegevens beheren (admin)
Als administrator wilt u natuurlijk alle gegevens kunnen beheren, dit kan als 
u inlogd met de gebruikersnaam "Admin" en het wachtwoord "Admin". U wordt dan
doorgeleid naar de administratorpagina, waar u alle gegevens van alle gebruikers
kan bewerken of verwijderen.

## Extra's
Naast de bovengenoemde vereiste zijn er ook nog extra's aanwezig. 

### Contact form
De website beschikt over een contact form, dit form kunnen de gebruikers 
invullen zodat er een mail naar ons wordt gestuurd, waarop wij vervolgens kunnen
reageren. 

    > De mail wordt alleen verzonden als de php op een server gerund wordt.