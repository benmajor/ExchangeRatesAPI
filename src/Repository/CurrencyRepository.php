<?php

namespace BenMajor\ExchangeRatesApi\Repository;

use BenMajor\ExchangeRatesApi\Model\Currency\UnitedArabEmiratesDirham;
use BenMajor\ExchangeRatesApi\Model\Currency\AfghanAfghani;
use BenMajor\ExchangeRatesApi\Model\Currency\AlbanianLek;
use BenMajor\ExchangeRatesApi\Model\Currency\ArmenianDram;
use BenMajor\ExchangeRatesApi\Model\Currency\NetherlandsAntilleanGuilder;
use BenMajor\ExchangeRatesApi\Model\Currency\AngolanKwanza;
use BenMajor\ExchangeRatesApi\Model\Currency\ArgentinePeso;
use BenMajor\ExchangeRatesApi\Model\Currency\AustralianDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\ArubanFlorin;
use BenMajor\ExchangeRatesApi\Model\Currency\AzerbaijaniManat;
use BenMajor\ExchangeRatesApi\Model\Currency\BosniaherzegovinaConvertibleMark;
use BenMajor\ExchangeRatesApi\Model\Currency\BarbadianDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\BangladeshiTaka;
use BenMajor\ExchangeRatesApi\Model\Currency\BulgarianLev;
use BenMajor\ExchangeRatesApi\Model\Currency\BahrainiDinar;
use BenMajor\ExchangeRatesApi\Model\Currency\BurundianFranc;
use BenMajor\ExchangeRatesApi\Model\Currency\BermudanDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\BruneiDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\BolivianBoliviano;
use BenMajor\ExchangeRatesApi\Model\Currency\BrazilianReal;
use BenMajor\ExchangeRatesApi\Model\Currency\BahamianDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\Bitcoin;
use BenMajor\ExchangeRatesApi\Model\Currency\BhutaneseNgultrum;
use BenMajor\ExchangeRatesApi\Model\Currency\BotswananPula;
use BenMajor\ExchangeRatesApi\Model\Currency\BelarusianRuble;
use BenMajor\ExchangeRatesApi\Model\Currency\BelarusianRubleHistoric;
use BenMajor\ExchangeRatesApi\Model\Currency\BelizeDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\CanadianDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\CongoleseFranc;
use BenMajor\ExchangeRatesApi\Model\Currency\SwissFranc;
use BenMajor\ExchangeRatesApi\Model\Currency\ChileanUnitOfAccountUf;
use BenMajor\ExchangeRatesApi\Model\Currency\ChileanPeso;
use BenMajor\ExchangeRatesApi\Model\Currency\ChineseYuan;
use BenMajor\ExchangeRatesApi\Model\Currency\ColombianPeso;
use BenMajor\ExchangeRatesApi\Model\Currency\CostaRicanColon;
use BenMajor\ExchangeRatesApi\Model\Currency\CubanConvertiblePeso;
use BenMajor\ExchangeRatesApi\Model\Currency\CubanPeso;
use BenMajor\ExchangeRatesApi\Model\Currency\CapeVerdeanEscudo;
use BenMajor\ExchangeRatesApi\Model\Currency\CzechRepublicKoruna;
use BenMajor\ExchangeRatesApi\Model\Currency\DjiboutianFranc;
use BenMajor\ExchangeRatesApi\Model\Currency\DanishKrone;
use BenMajor\ExchangeRatesApi\Model\Currency\DominicanPeso;
use BenMajor\ExchangeRatesApi\Model\Currency\AlgerianDinar;
use BenMajor\ExchangeRatesApi\Model\Currency\EgyptianPound;
use BenMajor\ExchangeRatesApi\Model\Currency\EritreanNakfa;
use BenMajor\ExchangeRatesApi\Model\Currency\EthiopianBirr;
use BenMajor\ExchangeRatesApi\Model\Currency\Euro;
use BenMajor\ExchangeRatesApi\Model\Currency\FijianDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\FalklandIslandsPound;
use BenMajor\ExchangeRatesApi\Model\Currency\BritishPoundSterling;
use BenMajor\ExchangeRatesApi\Model\Currency\GeorgianLari;
use BenMajor\ExchangeRatesApi\Model\Currency\GuernseyPound;
use BenMajor\ExchangeRatesApi\Model\Currency\GhanaianCedi;
use BenMajor\ExchangeRatesApi\Model\Currency\GibraltarPound;
use BenMajor\ExchangeRatesApi\Model\Currency\GambianDalasi;
use BenMajor\ExchangeRatesApi\Model\Currency\GuineanFranc;
use BenMajor\ExchangeRatesApi\Model\Currency\GuatemalanQuetzal;
use BenMajor\ExchangeRatesApi\Model\Currency\GuyanaeseDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\HongKongDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\HonduranLempira;
use BenMajor\ExchangeRatesApi\Model\Currency\CroatianKuna;
use BenMajor\ExchangeRatesApi\Model\Currency\HaitianGourde;
use BenMajor\ExchangeRatesApi\Model\Currency\HungarianForint;
use BenMajor\ExchangeRatesApi\Model\Currency\IndonesianRupiah;
use BenMajor\ExchangeRatesApi\Model\Currency\IsraeliNewSheqel;
use BenMajor\ExchangeRatesApi\Model\Currency\ManxPound;
use BenMajor\ExchangeRatesApi\Model\Currency\IndianRupee;
use BenMajor\ExchangeRatesApi\Model\Currency\IraqiDinar;
use BenMajor\ExchangeRatesApi\Model\Currency\IranianRial;
use BenMajor\ExchangeRatesApi\Model\Currency\IcelandicKrona;
use BenMajor\ExchangeRatesApi\Model\Currency\JerseyPound;
use BenMajor\ExchangeRatesApi\Model\Currency\JamaicanDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\JordanianDinar;
use BenMajor\ExchangeRatesApi\Model\Currency\JapaneseYen;
use BenMajor\ExchangeRatesApi\Model\Currency\KenyanShilling;
use BenMajor\ExchangeRatesApi\Model\Currency\KyrgystaniSom;
use BenMajor\ExchangeRatesApi\Model\Currency\CambodianRiel;
use BenMajor\ExchangeRatesApi\Model\Currency\ComorianFranc;
use BenMajor\ExchangeRatesApi\Model\Currency\NorthKoreanWon;
use BenMajor\ExchangeRatesApi\Model\Currency\SouthKoreanWon;
use BenMajor\ExchangeRatesApi\Model\Currency\KuwaitiDinar;
use BenMajor\ExchangeRatesApi\Model\Currency\CaymanIslandsDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\KazakhstaniTenge;
use BenMajor\ExchangeRatesApi\Model\Currency\LaotianKip;
use BenMajor\ExchangeRatesApi\Model\Currency\LebanesePound;
use BenMajor\ExchangeRatesApi\Model\Currency\SriLankanRupee;
use BenMajor\ExchangeRatesApi\Model\Currency\LiberianDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\LesothoLoti;
use BenMajor\ExchangeRatesApi\Model\Currency\LithuanianLitas;
use BenMajor\ExchangeRatesApi\Model\Currency\LatvianLats;
use BenMajor\ExchangeRatesApi\Model\Currency\LibyanDinar;
use BenMajor\ExchangeRatesApi\Model\Currency\MoroccanDirham;
use BenMajor\ExchangeRatesApi\Model\Currency\MoldovanLeu;
use BenMajor\ExchangeRatesApi\Model\Currency\MalagasyAriary;
use BenMajor\ExchangeRatesApi\Model\Currency\MacedonianDenar;
use BenMajor\ExchangeRatesApi\Model\Currency\MyanmaKyat;
use BenMajor\ExchangeRatesApi\Model\Currency\MongolianTugrik;
use BenMajor\ExchangeRatesApi\Model\Currency\MacanesePataca;
use BenMajor\ExchangeRatesApi\Model\Currency\MauritanianOuguiya;
use BenMajor\ExchangeRatesApi\Model\Currency\MauritianRupee;
use BenMajor\ExchangeRatesApi\Model\Currency\MaldivianRufiyaa;
use BenMajor\ExchangeRatesApi\Model\Currency\MalawianKwacha;
use BenMajor\ExchangeRatesApi\Model\Currency\MexicanPeso;
use BenMajor\ExchangeRatesApi\Model\Currency\MalaysianRinggit;
use BenMajor\ExchangeRatesApi\Model\Currency\MozambicanMetical;
use BenMajor\ExchangeRatesApi\Model\Currency\NamibianDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\NigerianNaira;
use BenMajor\ExchangeRatesApi\Model\Currency\NicaraguanCordoba;
use BenMajor\ExchangeRatesApi\Model\Currency\NorwegianKrone;
use BenMajor\ExchangeRatesApi\Model\Currency\NepaleseRupee;
use BenMajor\ExchangeRatesApi\Model\Currency\NewZealandDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\OmaniRial;
use BenMajor\ExchangeRatesApi\Model\Currency\PanamanianBalboa;
use BenMajor\ExchangeRatesApi\Model\Currency\PeruvianNuevoSol;
use BenMajor\ExchangeRatesApi\Model\Currency\PapuaNewGuineanKina;
use BenMajor\ExchangeRatesApi\Model\Currency\PhilippinePeso;
use BenMajor\ExchangeRatesApi\Model\Currency\PakistaniRupee;
use BenMajor\ExchangeRatesApi\Model\Currency\PolishZloty;
use BenMajor\ExchangeRatesApi\Model\Currency\ParaguayanGuarani;
use BenMajor\ExchangeRatesApi\Model\Currency\QatariRial;
use BenMajor\ExchangeRatesApi\Model\Currency\RomanianLeu;
use BenMajor\ExchangeRatesApi\Model\Currency\SerbianDinar;
use BenMajor\ExchangeRatesApi\Model\Currency\RussianRuble;
use BenMajor\ExchangeRatesApi\Model\Currency\RwandanFranc;
use BenMajor\ExchangeRatesApi\Model\Currency\SaudiRiyal;
use BenMajor\ExchangeRatesApi\Model\Currency\SolomonIslandsDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\SeychelloisRupee;
use BenMajor\ExchangeRatesApi\Model\Currency\SudanesePound;
use BenMajor\ExchangeRatesApi\Model\Currency\SouthSudanesePound;
use BenMajor\ExchangeRatesApi\Model\Currency\SwedishKrona;
use BenMajor\ExchangeRatesApi\Model\Currency\SingaporeDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\SaintHelenaPound;
use BenMajor\ExchangeRatesApi\Model\Currency\SierraLeoneanLeone;
use BenMajor\ExchangeRatesApi\Model\Currency\SierraLeoneanLeoneHistoric;
use BenMajor\ExchangeRatesApi\Model\Currency\SomaliShilling;
use BenMajor\ExchangeRatesApi\Model\Currency\SurinameseDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\SaoTomeAndPrincipeDobra;
use BenMajor\ExchangeRatesApi\Model\Currency\SalvadoranColon;
use BenMajor\ExchangeRatesApi\Model\Currency\SyrianPound;
use BenMajor\ExchangeRatesApi\Model\Currency\SwaziLilangeni;
use BenMajor\ExchangeRatesApi\Model\Currency\ThaiBaht;
use BenMajor\ExchangeRatesApi\Model\Currency\TajikistaniSomoni;
use BenMajor\ExchangeRatesApi\Model\Currency\TurkmenistaniManat;
use BenMajor\ExchangeRatesApi\Model\Currency\TunisianDinar;
use BenMajor\ExchangeRatesApi\Model\Currency\TonganPaanga;
use BenMajor\ExchangeRatesApi\Model\Currency\TurkishLira;
use BenMajor\ExchangeRatesApi\Model\Currency\TrinidadAndTobagoDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\NewTaiwanDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\TanzanianShilling;
use BenMajor\ExchangeRatesApi\Model\Currency\UkrainianHryvnia;
use BenMajor\ExchangeRatesApi\Model\Currency\UgandanShilling;
use BenMajor\ExchangeRatesApi\Model\Currency\UnitedStatesDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\UruguayanPeso;
use BenMajor\ExchangeRatesApi\Model\Currency\UzbekistanSom;
use BenMajor\ExchangeRatesApi\Model\Currency\VenezuelanBolivarFuerte;
use BenMajor\ExchangeRatesApi\Model\Currency\VenezuelanBolivarFuerteAlt;
use BenMajor\ExchangeRatesApi\Model\Currency\VietnameseDong;
use BenMajor\ExchangeRatesApi\Model\Currency\VanuatuVatu;
use BenMajor\ExchangeRatesApi\Model\Currency\SamoanTala;
use BenMajor\ExchangeRatesApi\Model\Currency\CfaFrancBeac;
use BenMajor\ExchangeRatesApi\Model\Currency\SilverTroyOunce;
use BenMajor\ExchangeRatesApi\Model\Currency\GoldTroyOunce;
use BenMajor\ExchangeRatesApi\Model\Currency\EastCaribbeanDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\SpecialDrawingRights;
use BenMajor\ExchangeRatesApi\Model\Currency\CfaFrancBceao;
use BenMajor\ExchangeRatesApi\Model\Currency\CfpFranc;
use BenMajor\ExchangeRatesApi\Model\Currency\YemeniRial;
use BenMajor\ExchangeRatesApi\Model\Currency\SouthAfricanRand;
use BenMajor\ExchangeRatesApi\Model\Currency\ZambianKwachaPre2013;
use BenMajor\ExchangeRatesApi\Model\Currency\ZambianKwacha;
use BenMajor\ExchangeRatesApi\Model\Currency\ZimbabweanDollar;
use BenMajor\ExchangeRatesApi\Model\Currency\CurrencyInterface;

class CurrencyRepository
{
    private const CURRENCIES = [
        UnitedArabEmiratesDirham::CODE => UnitedArabEmiratesDirham::class,
        AfghanAfghani::CODE => AfghanAfghani::class,
        AlbanianLek::CODE => AlbanianLek::class,
        ArmenianDram::CODE => ArmenianDram::class,
        NetherlandsAntilleanGuilder::CODE => NetherlandsAntilleanGuilder::class,
        AngolanKwanza::CODE => AngolanKwanza::class,
        ArgentinePeso::CODE => ArgentinePeso::class,
        AustralianDollar::CODE => AustralianDollar::class,
        ArubanFlorin::CODE => ArubanFlorin::class,
        AzerbaijaniManat::CODE => AzerbaijaniManat::class,
        BosniaherzegovinaConvertibleMark::CODE => BosniaherzegovinaConvertibleMark::class,
        BarbadianDollar::CODE => BarbadianDollar::class,
        BangladeshiTaka::CODE => BangladeshiTaka::class,
        BulgarianLev::CODE => BulgarianLev::class,
        BahrainiDinar::CODE => BahrainiDinar::class,
        BurundianFranc::CODE => BurundianFranc::class,
        BermudanDollar::CODE => BermudanDollar::class,
        BruneiDollar::CODE => BruneiDollar::class,
        BolivianBoliviano::CODE => BolivianBoliviano::class,
        BrazilianReal::CODE => BrazilianReal::class,
        BahamianDollar::CODE => BahamianDollar::class,
        Bitcoin::CODE => Bitcoin::class,
        BhutaneseNgultrum::CODE => BhutaneseNgultrum::class,
        BotswananPula::CODE => BotswananPula::class,
        BelarusianRuble::CODE => BelarusianRuble::class,
        BelarusianRubleHistoric::CODE => BelarusianRubleHistoric::class,
        BelizeDollar::CODE => BelizeDollar::class,
        CanadianDollar::CODE => CanadianDollar::class,
        CongoleseFranc::CODE => CongoleseFranc::class,
        SwissFranc::CODE => SwissFranc::class,
        ChileanUnitOfAccountUf::CODE => ChileanUnitOfAccountUf::class,
        ChileanPeso::CODE => ChileanPeso::class,
        ChineseYuan::CODE => ChineseYuan::class,
        ColombianPeso::CODE => ColombianPeso::class,
        CostaRicanColon::CODE => CostaRicanColon::class,
        CubanConvertiblePeso::CODE => CubanConvertiblePeso::class,
        CubanPeso::CODE => CubanPeso::class,
        CapeVerdeanEscudo::CODE => CapeVerdeanEscudo::class,
        CzechRepublicKoruna::CODE => CzechRepublicKoruna::class,
        DjiboutianFranc::CODE => DjiboutianFranc::class,
        DanishKrone::CODE => DanishKrone::class,
        DominicanPeso::CODE => DominicanPeso::class,
        AlgerianDinar::CODE => AlgerianDinar::class,
        EgyptianPound::CODE => EgyptianPound::class,
        EritreanNakfa::CODE => EritreanNakfa::class,
        EthiopianBirr::CODE => EthiopianBirr::class,
        Euro::CODE => Euro::class,
        FijianDollar::CODE => FijianDollar::class,
        FalklandIslandsPound::CODE => FalklandIslandsPound::class,
        BritishPoundSterling::CODE => BritishPoundSterling::class,
        GeorgianLari::CODE => GeorgianLari::class,
        GuernseyPound::CODE => GuernseyPound::class,
        GhanaianCedi::CODE => GhanaianCedi::class,
        GibraltarPound::CODE => GibraltarPound::class,
        GambianDalasi::CODE => GambianDalasi::class,
        GuineanFranc::CODE => GuineanFranc::class,
        GuatemalanQuetzal::CODE => GuatemalanQuetzal::class,
        GuyanaeseDollar::CODE => GuyanaeseDollar::class,
        HongKongDollar::CODE => HongKongDollar::class,
        HonduranLempira::CODE => HonduranLempira::class,
        CroatianKuna::CODE => CroatianKuna::class,
        HaitianGourde::CODE => HaitianGourde::class,
        HungarianForint::CODE => HungarianForint::class,
        IndonesianRupiah::CODE => IndonesianRupiah::class,
        IsraeliNewSheqel::CODE => IsraeliNewSheqel::class,
        ManxPound::CODE => ManxPound::class,
        IndianRupee::CODE => IndianRupee::class,
        IraqiDinar::CODE => IraqiDinar::class,
        IranianRial::CODE => IranianRial::class,
        IcelandicKrona::CODE => IcelandicKrona::class,
        JerseyPound::CODE => JerseyPound::class,
        JamaicanDollar::CODE => JamaicanDollar::class,
        JordanianDinar::CODE => JordanianDinar::class,
        JapaneseYen::CODE => JapaneseYen::class,
        KenyanShilling::CODE => KenyanShilling::class,
        KyrgystaniSom::CODE => KyrgystaniSom::class,
        CambodianRiel::CODE => CambodianRiel::class,
        ComorianFranc::CODE => ComorianFranc::class,
        NorthKoreanWon::CODE => NorthKoreanWon::class,
        SouthKoreanWon::CODE => SouthKoreanWon::class,
        KuwaitiDinar::CODE => KuwaitiDinar::class,
        CaymanIslandsDollar::CODE => CaymanIslandsDollar::class,
        KazakhstaniTenge::CODE => KazakhstaniTenge::class,
        LaotianKip::CODE => LaotianKip::class,
        LebanesePound::CODE => LebanesePound::class,
        SriLankanRupee::CODE => SriLankanRupee::class,
        LiberianDollar::CODE => LiberianDollar::class,
        LesothoLoti::CODE => LesothoLoti::class,
        LithuanianLitas::CODE => LithuanianLitas::class,
        LatvianLats::CODE => LatvianLats::class,
        LibyanDinar::CODE => LibyanDinar::class,
        MoroccanDirham::CODE => MoroccanDirham::class,
        MoldovanLeu::CODE => MoldovanLeu::class,
        MalagasyAriary::CODE => MalagasyAriary::class,
        MacedonianDenar::CODE => MacedonianDenar::class,
        MyanmaKyat::CODE => MyanmaKyat::class,
        MongolianTugrik::CODE => MongolianTugrik::class,
        MacanesePataca::CODE => MacanesePataca::class,
        MauritanianOuguiya::CODE => MauritanianOuguiya::class,
        MauritianRupee::CODE => MauritianRupee::class,
        MaldivianRufiyaa::CODE => MaldivianRufiyaa::class,
        MalawianKwacha::CODE => MalawianKwacha::class,
        MexicanPeso::CODE => MexicanPeso::class,
        MalaysianRinggit::CODE => MalaysianRinggit::class,
        MozambicanMetical::CODE => MozambicanMetical::class,
        NamibianDollar::CODE => NamibianDollar::class,
        NigerianNaira::CODE => NigerianNaira::class,
        NicaraguanCordoba::CODE => NicaraguanCordoba::class,
        NorwegianKrone::CODE => NorwegianKrone::class,
        NepaleseRupee::CODE => NepaleseRupee::class,
        NewZealandDollar::CODE => NewZealandDollar::class,
        OmaniRial::CODE => OmaniRial::class,
        PanamanianBalboa::CODE => PanamanianBalboa::class,
        PeruvianNuevoSol::CODE => PeruvianNuevoSol::class,
        PapuaNewGuineanKina::CODE => PapuaNewGuineanKina::class,
        PhilippinePeso::CODE => PhilippinePeso::class,
        PakistaniRupee::CODE => PakistaniRupee::class,
        PolishZloty::CODE => PolishZloty::class,
        ParaguayanGuarani::CODE => ParaguayanGuarani::class,
        QatariRial::CODE => QatariRial::class,
        RomanianLeu::CODE => RomanianLeu::class,
        SerbianDinar::CODE => SerbianDinar::class,
        RussianRuble::CODE => RussianRuble::class,
        RwandanFranc::CODE => RwandanFranc::class,
        SaudiRiyal::CODE => SaudiRiyal::class,
        SolomonIslandsDollar::CODE => SolomonIslandsDollar::class,
        SeychelloisRupee::CODE => SeychelloisRupee::class,
        SudanesePound::CODE => SudanesePound::class,
        SouthSudanesePound::CODE => SouthSudanesePound::class,
        SwedishKrona::CODE => SwedishKrona::class,
        SingaporeDollar::CODE => SingaporeDollar::class,
        SaintHelenaPound::CODE => SaintHelenaPound::class,
        SierraLeoneanLeone::CODE => SierraLeoneanLeone::class,
        SierraLeoneanLeoneHistoric::CODE => SierraLeoneanLeoneHistoric::class,
        SomaliShilling::CODE => SomaliShilling::class,
        SurinameseDollar::CODE => SurinameseDollar::class,
        SaoTomeAndPrincipeDobra::CODE => SaoTomeAndPrincipeDobra::class,
        SalvadoranColon::CODE => SalvadoranColon::class,
        SyrianPound::CODE => SyrianPound::class,
        SwaziLilangeni::CODE => SwaziLilangeni::class,
        ThaiBaht::CODE => ThaiBaht::class,
        TajikistaniSomoni::CODE => TajikistaniSomoni::class,
        TurkmenistaniManat::CODE => TurkmenistaniManat::class,
        TunisianDinar::CODE => TunisianDinar::class,
        TonganPaanga::CODE => TonganPaanga::class,
        TurkishLira::CODE => TurkishLira::class,
        TrinidadAndTobagoDollar::CODE => TrinidadAndTobagoDollar::class,
        NewTaiwanDollar::CODE => NewTaiwanDollar::class,
        TanzanianShilling::CODE => TanzanianShilling::class,
        UkrainianHryvnia::CODE => UkrainianHryvnia::class,
        UgandanShilling::CODE => UgandanShilling::class,
        UnitedStatesDollar::CODE => UnitedStatesDollar::class,
        UruguayanPeso::CODE => UruguayanPeso::class,
        UzbekistanSom::CODE => UzbekistanSom::class,
        VenezuelanBolivarFuerte::CODE => VenezuelanBolivarFuerte::class,
        VenezuelanBolivarFuerteAlt::CODE => VenezuelanBolivarFuerteAlt::class,
        VietnameseDong::CODE => VietnameseDong::class,
        VanuatuVatu::CODE => VanuatuVatu::class,
        SamoanTala::CODE => SamoanTala::class,
        CfaFrancBeac::CODE => CfaFrancBeac::class,
        SilverTroyOunce::CODE => SilverTroyOunce::class,
        GoldTroyOunce::CODE => GoldTroyOunce::class,
        EastCaribbeanDollar::CODE => EastCaribbeanDollar::class,
        SpecialDrawingRights::CODE => SpecialDrawingRights::class,
        CfaFrancBceao::CODE => CfaFrancBceao::class,
        CfpFranc::CODE => CfpFranc::class,
        YemeniRial::CODE => YemeniRial::class,
        SouthAfricanRand::CODE => SouthAfricanRand::class,
        ZambianKwachaPre2013::CODE => ZambianKwachaPre2013::class,
        ZambianKwacha::CODE => ZambianKwacha::class,
        ZimbabweanDollar::CODE => ZimbabweanDollar::class,

    ];

    public static function findOneByCode(string $code): ?CurrencyInterface
    {
        if (array_key_exists($code, self::CURRENCIES) === false) {
            return null;
        }

        $className = self::CURRENCIES[$code];

        return new $className();
    }
}
