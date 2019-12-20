<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class DatabaseReset extends Seeder
{
    public function run()
    {
/*
        \DB::statement('DELETE FROM users WHERE id > 800000');
        \DB::statement('DELETE FROM __groups WHERE id > 800100');
        \DB::statement('DELETE FROM __group_users WHERE id > 800200');
        \DB::statement('DELETE FROM __roles WHERE id > 800300');
        \DB::statement('DELETE FROM __group_roles WHERE id > 800400');
*/

        \DB::statement('DELETE FROM __resources WHERE id > 800500');
        \DB::statement('DELETE FROM __resource_roles WHERE id > 800600');
        \DB::statement('DELETE FROM __resource_scopes WHERE id > 800700');
        \DB::statement('DELETE FROM __resource_relations WHERE id > 800800');
        \DB::statement('DELETE FROM __resource_forms WHERE id > 800900');
        \DB::statement('DELETE FROM __resource_form_fields WHERE id > 801000');
        \DB::statement('DELETE FROM __resource_form_field_data WHERE id > 801100');
        \DB::statement('DELETE FROM __resource_form_field_options WHERE id > 801200');
        \DB::statement('DELETE FROM __resource_form_field_attrs WHERE id > 801300');
        \DB::statement('DELETE FROM __resource_form_field_dynamic WHERE id > 801400');
        \DB::statement('DELETE FROM __resource_form_field_validations WHERE id > 801500');
        \DB::statement('DELETE FROM __resource_form_field_depends WHERE id > 801600');
        \DB::statement('DELETE FROM __resource_form_layout WHERE id > 801700');
        \DB::statement('DELETE FROM __resource_form_data_map WHERE id > 801800');
        \DB::statement('DELETE FROM __resource_form_defaults WHERE id > 801900');
        \DB::statement('DELETE FROM __resource_form_collection WHERE id > 802000');
        \DB::statement('DELETE FROM __resource_form_upload WHERE id > 802100');
        \DB::statement('DELETE FROM __resource_lists WHERE id > 802200');
        \DB::statement('DELETE FROM __resource_list_scopes WHERE id > 802300');
        \DB::statement('DELETE FROM __resource_list_relations WHERE id > 802400');
        \DB::statement('DELETE FROM __resource_list_layout WHERE id > 802500');
        \DB::statement('DELETE FROM __resource_list_search WHERE id > 802600');
        \DB::statement('DELETE FROM __resource_data WHERE id > 802700');
        \DB::statement('DELETE FROM __resource_data_scopes WHERE id > 802800');
        \DB::statement('DELETE FROM __resource_data_relations WHERE id > 802900');
        \DB::statement('DELETE FROM __resource_data_view_sections WHERE id > 803000');
        \DB::statement('DELETE FROM __resource_data_view_section_items WHERE id > 803100');
        \DB::statement('DELETE FROM __resource_actions WHERE id > 803200');
        \DB::statement('DELETE FROM __resource_action_methods WHERE id > 803300');
        \DB::statement('DELETE FROM __resource_action_attrs WHERE id > 803400');
        \DB::statement('DELETE FROM __resource_action_lists WHERE id > 803500');
        \DB::statement('DELETE FROM __resource_action_data WHERE id > 803600');
        \DB::statement('DELETE FROM __resource_defaults WHERE id > 803700');
        \DB::statement('DELETE FROM __resource_metrics WHERE id > 803800');
        \DB::statement('DELETE FROM __resource_dashboard WHERE id > 803900');
        \DB::statement('DELETE FROM __resource_dashboard_sections WHERE id > 804000');
        \DB::statement('DELETE FROM __resource_dashboard_section_items WHERE id > 804100');

/*
        \DB::statement('ALTER TABLE `users`  AUTO_INCREMENT=800001');
        \DB::statement('ALTER TABLE `__groups`  AUTO_INCREMENT=800101');
        \DB::statement('ALTER TABLE `__group_users`  AUTO_INCREMENT=800201');
        \DB::statement('ALTER TABLE `__roles`  AUTO_INCREMENT=800301');
        \DB::statement('ALTER TABLE `__group_roles`  AUTO_INCREMENT=800401');
*/

        \DB::statement('ALTER TABLE `__resources`  AUTO_INCREMENT=800501');
        \DB::statement('ALTER TABLE `__resource_roles`  AUTO_INCREMENT=800601');
        \DB::statement('ALTER TABLE `__resource_scopes`  AUTO_INCREMENT=800701');
        \DB::statement('ALTER TABLE `__resource_relations`  AUTO_INCREMENT=800801');
        \DB::statement('ALTER TABLE `__resource_forms`  AUTO_INCREMENT=800901');
        \DB::statement('ALTER TABLE `__resource_form_fields`  AUTO_INCREMENT=801001');
        \DB::statement('ALTER TABLE `__resource_form_field_data`  AUTO_INCREMENT=801101');
        \DB::statement('ALTER TABLE `__resource_form_field_options`  AUTO_INCREMENT=801201');
        \DB::statement('ALTER TABLE `__resource_form_field_attrs`  AUTO_INCREMENT=801301');
        \DB::statement('ALTER TABLE `__resource_form_field_dynamic`  AUTO_INCREMENT=801401');
        \DB::statement('ALTER TABLE `__resource_form_field_validations`  AUTO_INCREMENT=801501');
        \DB::statement('ALTER TABLE `__resource_form_field_depends`  AUTO_INCREMENT=801601');
        \DB::statement('ALTER TABLE `__resource_form_layout`  AUTO_INCREMENT=801701');
        \DB::statement('ALTER TABLE `__resource_form_data_map`  AUTO_INCREMENT=801801');
        \DB::statement('ALTER TABLE `__resource_form_defaults`  AUTO_INCREMENT=801901');
        \DB::statement('ALTER TABLE `__resource_form_collection`  AUTO_INCREMENT=802001');
        \DB::statement('ALTER TABLE `__resource_form_upload`  AUTO_INCREMENT=802101');
        \DB::statement('ALTER TABLE `__resource_lists`  AUTO_INCREMENT=802201');
        \DB::statement('ALTER TABLE `__resource_list_scopes`  AUTO_INCREMENT=802301');
        \DB::statement('ALTER TABLE `__resource_list_relations`  AUTO_INCREMENT=802401');
        \DB::statement('ALTER TABLE `__resource_list_layout`  AUTO_INCREMENT=802501');
        \DB::statement('ALTER TABLE `__resource_list_search`  AUTO_INCREMENT=802601');
        \DB::statement('ALTER TABLE `__resource_data`  AUTO_INCREMENT=802701');
        \DB::statement('ALTER TABLE `__resource_data_scopes`  AUTO_INCREMENT=802801');
        \DB::statement('ALTER TABLE `__resource_data_relations`  AUTO_INCREMENT=802901');
        \DB::statement('ALTER TABLE `__resource_data_view_sections`  AUTO_INCREMENT=803001');
        \DB::statement('ALTER TABLE `__resource_data_view_section_items`  AUTO_INCREMENT=803101');
        \DB::statement('ALTER TABLE `__resource_actions`  AUTO_INCREMENT=803201');
        \DB::statement('ALTER TABLE `__resource_action_methods`  AUTO_INCREMENT=803301');
        \DB::statement('ALTER TABLE `__resource_action_attrs`  AUTO_INCREMENT=803401');
        \DB::statement('ALTER TABLE `__resource_action_lists`  AUTO_INCREMENT=803501');
        \DB::statement('ALTER TABLE `__resource_action_data`  AUTO_INCREMENT=803601');
        \DB::statement('ALTER TABLE `__resource_defaults`  AUTO_INCREMENT=803701');
        \DB::statement('ALTER TABLE `__resource_metrics`  AUTO_INCREMENT=803801');
        \DB::statement('ALTER TABLE `__resource_dashboard`  AUTO_INCREMENT=803901');
        \DB::statement('ALTER TABLE `__resource_dashboard_sections`  AUTO_INCREMENT=804001');
        \DB::statement('ALTER TABLE `__resource_dashboard_section_items`  AUTO_INCREMENT=804101');
    }
}
