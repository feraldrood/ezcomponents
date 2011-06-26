<?php
// Autogenerated PersistentObject definition

$def = new ezcPersistentObjectDefinition();
$def->table = 'ce_message_category_rel';
$def->class = 'ce_message_category_rel';

$def->properties['category_id']               = new ezcPersistentObjectProperty();
$def->properties['category_id']->columnName   = 'category_id';
$def->properties['category_id']->propertyName = 'category_id';
$def->properties['category_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;


$def->properties['is_shadow']               = new ezcPersistentObjectProperty();
$def->properties['is_shadow']->columnName   = 'is_shadow';
$def->properties['is_shadow']->propertyName = 'is_shadow';
$def->properties['is_shadow']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;


$def->properties['message_id']               = new ezcPersistentObjectProperty();
$def->properties['message_id']->columnName   = 'message_id';
$def->properties['message_id']->propertyName = 'message_id';
$def->properties['message_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

return $def;

?>