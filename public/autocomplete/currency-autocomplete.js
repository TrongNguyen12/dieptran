$(function(){
  var currencies = [
    { value: 'Afghan afghani', data: 'AFN' },
    { value: 'Albanian lek', data: 'ALL' },
    { value: 'Algerian dinar', data: 'DZD' },
    { value: 'European euro', data: 'EUR' },
    { value: 'Angolan kwanza', data: 'AOA' },
    { value: 'East Caribbean dollar', data: 'XCD' },
    { value: 'Argentine peso', data: 'ARS' },
    { value: 'Armenian dram', data: 'AMD' },
    { value: 'Aruban florin', data: 'AWG' },
    { value: 'Australian dollar', data: 'AUD' },
    { value: 'Azerbaijani manat', data: 'AZN' },
    { value: 'Bahamian dollar', data: 'BSD' },
    { value: 'Bahraini dinar', data: 'BHD' },
    { value: 'Bangladeshi taka', data: 'BDT' },
    { value: 'Barbadian dollar', data: 'BBD' },
    { value: 'Belarusian ruble', data: 'BYR' },
    { value: 'Belize dollar', data: 'BZD' },
    { value: 'West African CFA franc', data: 'XOF' },
    { value: 'Bhutanese ngultrum', data: 'BTN' },
    { value: 'Bolivian boliviano', data: 'BOB' },
    { value: 'Bosnia-Herzegovina konvertibilna marka', data: 'BAM' },
    { value: 'Botswana pula', data: 'BWP' },
    { value: 'Brazilian real', data: 'BRL' },
    { value: 'Brunei dollar', data: 'BND' },
    { value: 'Bulgarian lev', data: 'BGN' },
    { value: 'Burundi franc', data: 'BIF' },
    { value: 'Cambodian riel', data: 'KHR' },
    { value: 'Central African CFA franc', data: 'XAF' },
    { value: 'Canadian dollar', data: 'CAD' },
    { value: 'Cape Verdean escudo', data: 'CVE' },
    { value: 'Cayman Islands dollar', data: 'KYD' },
    { value: 'Chilean peso', data: 'CLP' },
    { value: 'Chinese renminbi', data: 'CNY' },
    { value: 'Colombian peso', data: 'COP' },
    { value: 'Comorian franc', data: 'KMF' },
    { value: 'Congolese franc', data: 'CDF' },
    { value: 'Costa Rican colon', data: 'CRC' },
    { value: 'Croatian kuna', data: 'HRK' },
    { value: 'Cuban peso', data: 'CUC' },
    { value: 'Czech koruna', data: 'CZK' },
    { value: 'Danish krone', data: 'DKK' },
    { value: 'Djiboutian franc', data: 'DJF' },
    { value: 'Dominican peso', data: 'DOP' },
    { value: 'Egyptian pound', data: 'EGP' },
    { value: 'Central African CFA franc', data: 'GQE' },
    { value: 'Eritrean nakfa', data: 'ERN' },
    { value: 'Estonian kroon', data: 'EEK' },
    { value: 'Ethiopian birr', data: 'ETB' },
    { value: 'Falkland Islands pound', data: 'FKP' },
    { value: 'Fijian dollar', data: 'FJD' },
    { value: 'CFP franc', data: 'XPF' },
    { value: 'Gambian dalasi', data: 'GMD' },
    { value: 'Georgian lari', data: 'GEL' },
    { value: 'Ghanaian cedi', data: 'GHS' },
    { value: 'Gibraltar pound', data: 'GIP' },
    { value: 'Guatemalan quetzal', data: 'GTQ' },
    { value: 'Guinean franc', data: 'GNF' },
    { value: 'Guyanese dollar', data: 'GYD' },
    { value: 'Haitian gourde', data: 'HTG' },
    { value: 'Honduran lempira', data: 'HNL' },
    { value: 'Hong Kong dollar', data: 'HKD' },
    { value: 'Hungarian forint', data: 'HUF' },
    { value: 'Icelandic krona', data: 'ISK' },
    { value: 'Indian rupee', data: 'INR' },
    { value: 'Indonesian rupiah', data: 'IDR' },
    { value: 'Iranian rial', data: 'IRR' },
    { value: 'Iraqi dinar', data: 'IQD' },
    { value: 'Israeli new sheqel', data: 'ILS' },
    { value: 'Jamaican dollar', data: 'JMD' },
    { value: 'Japanese yen', data: 'JPY' },
    { value: 'Jordanian dinar', data: 'JOD' },
    { value: 'Kazakhstani tenge', data: 'KZT' },
    { value: 'Kenyan shilling', data: 'KES' },
    { value: 'North Korean won', data: 'KPW' },
    { value: 'South Korean won', data: 'KRW' },
    { value: 'Kuwaiti dinar', data: 'KWD' },
    { value: 'Kyrgyzstani som', data: 'KGS' },
    { value: 'Lao kip', data: 'LAK' },
    { value: 'Latvian lats', data: 'LVL' },
    { value: 'Lebanese lira', data: 'LBP' },
    { value: 'Lesotho loti', data: 'LSL' },
    { value: 'Liberian dollar', data: 'LRD' },
    { value: 'Libyan dinar', data: 'LYD' },
    { value: 'Lithuanian litas', data: 'LTL' },
    { value: 'Macanese pataca', data: 'MOP' },
    { value: 'Macedonian denar', data: 'MKD' },
    { value: 'Malagasy ariary', data: 'MGA' },
    { value: 'Malawian kwacha', data: 'MWK' },
    { value: 'Malaysian ringgit', data: 'MYR' },
    { value: 'Maldivian rufiyaa', data: 'MVR' },
    { value: 'Mauritanian ouguiya', data: 'MRO' },
    { value: 'Mauritian rupee', data: 'MUR' },
    { value: 'Mexican peso', data: 'MXN' },
    { value: 'Moldovan leu', data: 'MDL' },
    { value: 'Mongolian tugrik', data: 'MNT' },
    { value: 'Moroccan dirham', data: 'MAD' },
    { value: 'Mozambican metical', data: 'MZM' },
    { value: 'Myanma kyat', data: 'MMK' },
    { value: 'Namibian dollar', data: 'NAD' },
    { value: 'Nepalese rupee', data: 'NPR' },
    { value: 'Netherlands Antillean gulden', data: 'ANG' },
    { value: 'New Zealand dollar', data: 'NZD' },
    { value: 'Nicaraguan cordoba', data: 'NIO' },
    { value: 'Nigerian naira', data: 'NGN' },
    { value: 'Norwegian krone', data: 'NOK' },
    { value: 'Omani rial', data: 'OMR' },
    { value: 'Pakistani rupee', data: 'PKR' },
    { value: 'Panamanian balboa', data: 'PAB' },
    { value: 'Papua New Guinean kina', data: 'PGK' },
    { value: 'Paraguayan guarani', data: 'PYG' },
    { value: 'Peruvian nuevo sol', data: 'PEN' },
    { value: 'Philippine peso', data: 'PHP' },
    { value: 'Polish zloty', data: 'PLN' },
    { value: 'Qatari riyal', data: 'QAR' },
    { value: 'Romanian leu', data: 'RON' },
    { value: 'Russian ruble', data: 'RUB' },
    { value: 'Rwandan franc', data: 'RWF' },
    { value: 'Saint Helena pound', data: 'SHP' },
    { value: 'Samoan tala', data: 'WST' },
    { value: 'Sao Tome and Principe dobra', data: 'STD' },
    { value: 'Saudi riyal', data: 'SAR' },
    { value: 'Serbian dinar', data: 'RSD' },
    { value: 'Seychellois rupee', data: 'SCR' },
    { value: 'Sierra Leonean leone', data: 'SLL' },
    { value: 'Singapore dollar', data: 'SGD' },
    { value: 'Slovak koruna', data: 'SKK' },
    { value: 'Solomon Islands dollar', data: 'SBD' },
    { value: 'Somali shilling', data: 'SOS' },
    { value: 'South African rand', data: 'ZAR' },
    { value: 'Sudanese pound', data: 'SDG' },
    { value: 'Sri Lankan rupee', data: 'LKR' },
    { value: 'Sudanese pound', data: 'SDG' },
    { value: 'Surinamese dollar', data: 'SRD' },
    { value: 'Swazi lilangeni', data: 'SZL' },
    { value: 'Swedish krona', data: 'SEK' },
    { value: 'Swiss franc', data: 'CHF' },
    { value: 'Syrian pound', data: 'SYP' },
    { value: 'New Taiwan dollar', data: 'TWD' },
    { value: 'Tajikistani somoni', data: 'TJS' },
    { value: 'Tanzanian shilling', data: 'TZS' },
    { value: 'Thai baht', data: 'THB' },
    { value: 'Paanga', data: 'TOP' },
    { value: 'Trinidad and Tobago dollar', data: 'TTD' },
    { value: 'Tunisian dinar', data: 'TND' },
    { value: 'Turkish new lira', data: 'TRY' },
    { value: 'Turkmen manat', data: 'TMM' },
    { value: 'Ugandan shilling', data: 'UGX' },
    { value: 'Ukrainian hryvnia', data: 'UAH' },
    { value: 'United Arab Emirates dirham', data: 'AED' },
    { value: 'British pound', data: 'GBP' },
    { value: 'United States dollar', data: 'USD' },
    { value: 'Uruguayan peso', data: 'UYU' },
    { value: 'Uzbekistani som', data: 'UZS' },
    { value: 'Vanuatu vatu', data: 'VUV' },
    { value: 'Venezuelan bolivar', data: 'VEB' },
    { value: 'Vietnamese dong', data: 'VND' },
    { value: 'Yemeni rial', data: 'YER' },
    { value: 'Zambian kwacha', data: 'ZMK' },
    { value: 'Zimbabwean dollar', data: 'ZWD' },
  ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#autocomplete').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
      $('#outputcontent').html(thehtml);
    }
  });
  

});