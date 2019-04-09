<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Menu:Templates' => 'Templates',
	'Menu:Templates+' => 'Templates for object creation forms',
	'Templates:UserData' => 'Extra data',
	'Templates:Need' => 'Need',

	'Templates:PreviewTab:Title' => 'Preview',
	'Templates:PreviewTab:FormFields' => 'Faked form',
	'Templates:PreviewTab:HiddenFields' => 'Hidden fields',

	'Class:Template' => 'Template',
	'Class:Template+' => 'Template for creating objects from the portal',
	'Class:Template/Attribute:name' => 'Name',
	'Class:Template/Attribute:name+' => 'Internal name',
	'Class:Template/Attribute:label' => 'Label',
	'Class:Template/Attribute:label+' => 'Label used in the form',
	'Class:Template/Attribute:description' => 'Description',
	'Class:Template/Attribute:description+' => 'Description used in the form',
	'Class:Template/Attribute:field_list' => 'Fields',
	'Class:Template/Attribute:field_list+' => '',

	'Class:TemplateField' => 'Field',
	'Class:TemplateField+' => '',
	'Class:TemplateField/Attribute:template_id' => 'Template',
	'Class:TemplateField/Attribute:template_id+' => '',
	'Class:TemplateField/Attribute:template_id_finalclass_recall' => 'Type',
	'Class:TemplateField/Attribute:template_id_finalclass_recall+' => '',
	'Class:TemplateField/Attribute:code' => 'Code',
	'Class:TemplateField/Attribute:code+' => 'Attribute code or any value',
	'Class:TemplateField/Attribute:label' => 'Label',
	'Class:TemplateField/Attribute:label+' => 'Displayed to the end users',
	'Class:TemplateField/Attribute:order' => 'Order',
	'Class:TemplateField/Attribute:order+' => 'Position in the form',
	'Class:TemplateField/Attribute:mandatory' => 'Mandatory',
	'Class:TemplateField/Attribute:mandatory+' => '',
	'Class:TemplateField/Attribute:input_type' => 'Input type',
	'Class:TemplateField/Attribute:input_type+' => '',
	'Class:TemplateField/Attribute:input_type/Value:text' => 'Text',
	'Class:TemplateField/Attribute:input_type/Value:text+' => '',
	'Class:TemplateField/Attribute:input_type/Value:text_area' => 'Text area',
	'Class:TemplateField/Attribute:input_type/Value:text_area+' => '',
	'Class:TemplateField/Attribute:input_type/Value:drop_down_list' => 'Drop-down list',
	'Class:TemplateField/Attribute:input_type/Value:drop_down_list+' => '',
	'Class:TemplateField/Attribute:input_type/Value:radio_buttons' => 'List',
	'Class:TemplateField/Attribute:input_type/Value:radio_buttons+' => '',
	'Class:TemplateField/Attribute:input_type/Value:date' => 'Date',
	'Class:TemplateField/Attribute:input_type/Value:date+' => '',
	'Class:TemplateField/Attribute:input_type/Value:date_and_time' => 'Date and time',
	'Class:TemplateField/Attribute:input_type/Value:date_and_time+' => '',
	'Class:TemplateField/Attribute:input_type/Value:duration' => 'Duration',
	'Class:TemplateField/Attribute:input_type/Value:duration+' => '',
	'Class:TemplateField/Attribute:input_type/Value:read_only' => 'Read-only',
	'Class:TemplateField/Attribute:input_type/Value:read_only+' => '',
	'Class:TemplateField/Attribute:input_type/Value:hidden' => 'Hidden',
	'Class:TemplateField/Attribute:input_type/Value:hidden+' => '',
	'Class:TemplateField/Attribute:values' => 'Values (OQL or CSV)',
	'Class:TemplateField/Attribute:values+' => '"SELECT myClass WHERE name LIKE \'foo\'" or "val1,val2,..."',
	'Class:TemplateField/Attribute:initial_value' => 'Initial value',
	'Class:TemplateField/Attribute:initial_value+' => '',
	'Class:TemplateField/Attribute:format' => 'Format',
	'Class:TemplateField/Attribute:format+' => 'Regular expression',
));
