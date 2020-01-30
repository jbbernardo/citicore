<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\Assets\Image;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\ReadonlyField;
	use SilverStripe\Forms\DropdownField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Versioned\Versioned;
	use SilverStripe\Control\Controller;

	class Store extends DataObject {

		private static $db = array(
			'SortOrder' => 'Int',
			'Name' => 'Varchar(100)',
			'Lat' => 'Decimal(10,8)',
			'Lng' => 'Decimal(11,8)',
			/*'Phone' => 'Varchar(20)',*/
			/*'Details' => 'Text',*/
			/*'Address' => 'Varchar(100)',*/
			/*'SearchTags' => 'Varchar(255)',*/
			'isActive' => 'Boolean'
		);

		private static $has_one = array(
            'Pin' => Image::class,
        );

        private static $owns = [
            'Pin',
        ];

		private static $summary_fields = array( 
			// 'ID' => 'ID',
			'Name' => 'Name',
			'Lat' => 'Lat',
			'Lng' => 'Lng',
			'Phone' => 'Phone',
			'Address' => 'Address',
			'SearchTags' => 'SearchTags'
		);


		private static $searchable_fields = array(
			'Name',
			'Address',
			'SearchTags'
		);

		private static $defaults = array(
			'isActive' => 1,
		);

		private static $default_sort = 'SortOrder';

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));
			/*$fields->addFieldToTab('Root.Main', new TextField('Phone', 'Phone Number'));*/

			$fields->addFieldToTab('Root.Main', new ReadonlyField('SortOrder', 'Sort Order'));
			/*$fields->addFieldToTab('Root.Main', new TextField('SearchTags', 'Search Tags'));*/
			$fields->addFieldToTab('Root.Main', $pin = UploadField::create('Pin',' Pin'));
			// $fields->addFieldToTab('Root.Main', new Dropdownfield(
   //          'PlaceCategory',
   //          'Place Category',
   //          singleton('Store')->dbObject('PlaceCategory')->enumValues()
   //      ));

			$fields->addFieldToTab('Root.Location', new TextField('Lat', 'Latituide'));
			$fields->addFieldToTab('Root.Location', new TextField('Lng', 'Longitude'));
			/*$fields->addFieldToTab('Root.Location', new TextareaField('Details', 'Route Details'));*/
			/*$fields->addFieldToTab('Root.Location', new TextareaField('Address', 'Address'));*/
			$fields->removeByName('SortOrder');

			return $fields;

		}

		public function getCMSActions() {
			$actions = parent::getCMSActions();

			$action = new FormAction ('getGoogleCoordinates', 'Fetch Google Coordinates');
			$action->addExtraClass('ss-ui-action-constructive');
			$action->setDescription("Uses the Google's geocode api to automatically fetch the Longitude & Latitude values");
			$action->setAttribute('data-icon', 'accept');

			$actions->push($action);

			return $actions;
		}

		public function getTrimAddress() {
			return preg_replace('/\s+/', ' ', trim($this->Address));
		}

	}
}
