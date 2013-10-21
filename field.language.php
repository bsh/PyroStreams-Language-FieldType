<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroStreams Language Field Type
 *
 * @author		Laszlo Kovacs (bsh)
 */
class Field_language
{
	public $field_type_slug			= 'language';
	
	public $db_col_type				= 'varchar';

	public $version					= '1.0.0';

	public $author					= array('name' => 'Laszlo Kovacs', 'url' => 'http://xmeditor.hu');
	
	public $custom_parameters		= array('default_language','language_display');

	/**
	 * ISO 639-1 Language Codes
	 *
	 * @access 	public
	 * @var 	array
	 */
	 public $raw_languages = array(
        'en' => 'English' ,
        'aa' => 'Afar' ,
        'ab' => 'Abkhazian' ,
        'af' => 'Afrikaans' ,
        'am' => 'Amharic' ,
        'ar' => 'Arabic' ,
        'as' => 'Assamese' ,
        'ay' => 'Aymara' ,
        'az' => 'Azerbaijani' ,
        'ba' => 'Bashkir' ,
        'be' => 'Byelorussian' ,
        'bg' => 'Bulgarian' ,
        'bh' => 'Bihari' ,
        'bi' => 'Bislama' ,
        'bn' => 'Bengali/Bangla' ,
        'bo' => 'Tibetan' ,
        'br' => 'Breton' ,
        'ca' => 'Catalan' ,
        'co' => 'Corsican' ,
        'cs' => 'Czech' ,
        'cy' => 'Welsh' ,
        'da' => 'Danish' ,
        'de' => 'German' ,
        'dz' => 'Bhutani' ,
        'el' => 'Greek' ,
        'eo' => 'Esperanto' ,
        'es' => 'Spanish' ,
        'et' => 'Estonian' ,
        'eu' => 'Basque' ,
        'fa' => 'Persian' ,
        'fi' => 'Finnish' ,
        'fj' => 'Fiji' ,
        'fo' => 'Faeroese' ,
        'fr' => 'French' ,
        'fy' => 'Frisian' ,
        'ga' => 'Irish' ,
        'gd' => 'Scots/Gaelic' ,
        'gl' => 'Galician' ,
        'gn' => 'Guarani' ,
        'gu' => 'Gujarati' ,
        'ha' => 'Hausa' ,
        'hi' => 'Hindi' ,
        'hr' => 'Croatian' ,
        'hu' => 'Hungarian' ,
        'hy' => 'Armenian' ,
        'ia' => 'Interlingua' ,
        'ie' => 'Interlingue' ,
        'ik' => 'Inupiak' ,
        'in' => 'Indonesian' ,
        'is' => 'Icelandic' ,
        'it' => 'Italian' ,
        'iw' => 'Hebrew' ,
        'ja' => 'Japanese' ,
        'ji' => 'Yiddish' ,
        'jw' => 'Javanese' ,
        'ka' => 'Georgian' ,
        'kk' => 'Kazakh' ,
        'kl' => 'Greenlandic' ,
        'km' => 'Cambodian' ,
        'kn' => 'Kannada' ,
        'ko' => 'Korean' ,
        'ks' => 'Kashmiri' ,
        'ku' => 'Kurdish' ,
        'ky' => 'Kirghiz' ,
        'la' => 'Latin' ,
        'ln' => 'Lingala' ,
        'lo' => 'Laothian' ,
        'lt' => 'Lithuanian' ,
        'lv' => 'Latvian/Lettish' ,
        'mg' => 'Malagasy' ,
        'mi' => 'Maori' ,
        'mk' => 'Macedonian' ,
        'ml' => 'Malayalam' ,
        'mn' => 'Mongolian' ,
        'mo' => 'Moldavian' ,
        'mr' => 'Marathi' ,
        'ms' => 'Malay' ,
        'mt' => 'Maltese' ,
        'my' => 'Burmese' ,
        'na' => 'Nauru' ,
        'ne' => 'Nepali' ,
        'nl' => 'Dutch' ,
        'no' => 'Norwegian' ,
        'oc' => 'Occitan' ,
        'om' => '(Afan)/Oromoor/Oriya' ,
        'pa' => 'Punjabi' ,
        'pl' => 'Polish' ,
        'ps' => 'Pashto/Pushto' ,
        'pt' => 'Portuguese' ,
        'qu' => 'Quechua' ,
        'rm' => 'Rhaeto-Romance' ,
        'rn' => 'Kirundi' ,
        'ro' => 'Romanian' ,
        'ru' => 'Russian' ,
        'rw' => 'Kinyarwanda' ,
        'sa' => 'Sanskrit' ,
        'sd' => 'Sindhi' ,
        'sg' => 'Sangro' ,
        'sh' => 'Serbo-Croatian' ,
        'si' => 'Singhalese' ,
        'sk' => 'Slovak' ,
        'sl' => 'Slovenian' ,
        'sm' => 'Samoan' ,
        'sn' => 'Shona' ,
        'so' => 'Somali' ,
        'sq' => 'Albanian' ,
        'sr' => 'Serbian' ,
        'ss' => 'Siswati' ,
        'st' => 'Sesotho' ,
        'su' => 'Sundanese' ,
        'sv' => 'Swedish' ,
        'sw' => 'Swahili' ,
        'ta' => 'Tamil' ,
        'te' => 'Tegulu' ,
        'tg' => 'Tajik' ,
        'th' => 'Thai' ,
        'ti' => 'Tigrinya' ,
        'tk' => 'Turkmen' ,
        'tl' => 'Tagalog' ,
        'tn' => 'Setswana' ,
        'to' => 'Tonga' ,
        'tr' => 'Turkish' ,
        'ts' => 'Tsonga' ,
        'tt' => 'Tatar' ,
        'tw' => 'Twi' ,
        'uk' => 'Ukrainian' ,
        'ur' => 'Urdu' ,
        'uz' => 'Uzbek' ,
        'vi' => 'Vietnamese' ,
        'vo' => 'Volapuk' ,
        'wo' => 'Wolof' ,
        'xh' => 'Xhosa' ,
        'yo' => 'Yoruba' ,
        'zh' => 'Chinese' ,
        'zu' => 'Zulu'
        );
		
	/**
	 * Output form input
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function form_output($data, $entry_id, $field)
	{
		// Value
		// We only use the default value if this is a new entry.
		if ( ! $data['value'] and ! $entry_id)
		{
			$value = (isset($field->field_data['default_language'])) ? $field->field_data['default_language'] : null;
		}
		else
		{
			$value = $data['value'];
		}
	
		return form_dropdown($data['form_slug'], $this->languages($field->is_required, $data['custom']['language_display']), $value, 'id="'.$data['form_slug'].'"');
	}

	/**
	 * Pre Output for Plugin
	 * 
	 * Has two options:
	 *
	 * - code
	 * - language
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function pre_output_plugin($input, $data)
	{
		if ( ! $input) return null;

		return array(
			'code'	=> $input,
			'language' 	=> $this->raw_languages[$input]
		);
	}

	/**
	 * Output form input
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function pre_output($input, $data)
	{	
		$languages = $this->languages('yes', $data['language_display']);
	
		return ( isset($languages[$input]) ) ? $languages[$input] : null;
	}

	/**
	 * Params
	 *
	 * @access	public
	 * @return	string
	 */	
	public function param_language_display($value = null)
	{	
		$options = array(
			'language' => $this->CI->lang->line('streams:language.language'),
			'code' => $this->CI->lang->line('streams:language.code')
		);
	
		return form_dropdown('language_display', $options, $value);
	}

	/**
	 * Default Language Parameter
	 *
	 * @access 	public
	 * @return 	string
	 */
	public function param_default_language($input)
	{
		// Return a drop down of languages
		// but we don't require them to give one.
		return form_dropdown('default_language', $this->languages('no', 'language'), $input);
	}

	/**
	 * Language
	 *
	 * Returns an array of languages
	 *
	 * @access	private
	 * @return	array
	 */
	private function languages($is_required, $language_display = 'code')
	{	
		if( $language_display != 'code' and $language_display != 'language') $language_display = 'language';
	
		$choices = array();
	
		if($is_required == 'no') $choices[null] = get_instance()->config->item('dropdown_choose_null');
	
		$languages = array();
		
		if($language_display == 'code'):
		
			foreach($this->raw_languages as $code => $language):
			
				$languages[$code] = $code;
			
			endforeach;
			
		else:
		
			$languages = $this->raw_languages;
		
		endif; 
		
		return array_merge($choices, $languages);
	}
	
}