<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Det var ikke muligt at bestemme databasen ud fra den forbindelsesstring du har angivet.';
$lang['db_unable_to_connect'] = 'Der kunne ikke forbindes til databasen ud fra de angivne indstillinger.';
$lang['db_unable_to_select'] = 'Den angivne database kunne ikke vælges: %s';
$lang['db_unable_to_create'] = 'Det var ikke muligt at oprette den angivne database: %s';
$lang['db_invalid_query'] = 'Den anvendte forespørgsel er ikke gyldig.';
$lang['db_must_set_table'] = 'Du skal angive den database tabel du vil anvende i din forespørgsel.';
$lang['db_must_use_set'] = 'Du skal anvende "set" metoden for at opdatere en post.';
$lang['db_must_use_index'] = 'Du skal specificere et index til at matche for at kunne batch-opdatere.';
$lang['db_batch_missing_index'] = 'En eller flere af de indsendte rækker til batc-opdatering mangler det angivne index.';
$lang['db_must_use_where'] = 'Du må ikke opdatere uden at din forespørgsel indeholder en "where" klausul.';
$lang['db_del_must_use_where'] = 'Du må ikke slette uden at din forespørgsel indeholder en "where" eller "like" klausul.';
$lang['db_field_param_missing'] = 'For at hente felter skal du angive navnet på din tabel som en parameter.';
$lang['db_unsupported_function'] = 'Denne funktion er ikke tilgængelig for den database du anvender.';
$lang['db_transaction_failure'] = 'Transaktion fejl: Rollback udført.';
$lang['db_unable_to_drop'] = 'Det var ikke muligt at slette den angive database.';
$lang['db_unsuported_feature'] = 'Platformen du anvender understøtter ikke funktionaliteten.';
$lang['db_unsuported_compression'] = 'Det filkompressionsformat du har valgt er ikke understøttet af din server.';
$lang['db_filepath_error'] = 'Det var ikke muligt at skrive data til den fil sti du har angivet.';
$lang['db_invalid_cache_path'] = 'Den angivne sti til cache er ikke gyldig eller ikke skrivbar.';
$lang['db_table_name_required'] = 'Et tabelnavn er nødvendig for den pågældende operation.';
$lang['db_column_definition_required'] = 'En kolonne definition er nødvendig for den pågældende operation.';
$lang['db_unable_to_set_charset'] = 'Kunne ikke sætte klientforbindelsens tegnsæt: %s';
$lang['db_error_heading'] = 'En databasefejl opstod';

/* End of file db_lang.php */
/* Location: ./system/language/danish/db_lang.php */
