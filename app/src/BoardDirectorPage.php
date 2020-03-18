<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;

	// use Page;  
	// use PageController;

	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\CheckboxField;
	use SilverStripe\Forms\DateField;
	use SilverStripe\Forms\ReadonlyField;
	use SilverStripe\Forms\DropdownField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
	use Bummzack\SortableFile\Forms\SortableUploadField;

	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Assets\Image;
	use SilverStripe\Assets\File;

	use SilverStripe\ORM\PaginatedList;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\ORM\ArrayList;
	use SilverStripe\ORM\GroupedList;

	use SilverStripe\View\Requirements;
	use SilverStripe\View\ArrayData;

	use SilverStripe\Control\HTTPRequest;

	class BoardDirectorPage extends Page {

		private static $db = [
		
			/*Frame 1*/
			'Fr1FrameTitle' => 'Text',

		];

		private static $has_one = [
			'Fr1BG' => Image::class,
		];

		private static $has_many = [
			'ListBoardDirectors' => ListBoardDirector::class,
		];

		private static $owns = [
			'Fr1BG',
		];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Board Director',
			'MenuTitle' => 'Board of Director',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			/*
			|-----------------------------------------------
			| @Frame 1
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame1', new TabSet('Frame1Sets',
				new Tab('Text',
					TextField::create('Fr1FrameTitle', 'Title')
				),
				new Tab('Image',
					$uploadf1 = UploadField::create('Fr1BG','Background Image')
				),
				new Tab('List',
					GridField::create('ListBoardDirectors', 'Board of Directors', 
						$this->ListBoardDirectors(), 
					GridFieldConfig_RecordEditor::create(10)
					->addComponent(new GridFieldSortableRows('SortOrder'))
					)
				)
			));


			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			# SET FIELD DESCRIPTION 
			$uploadf1->setDescription('Max file size: 1MB | Dimension: At Least 1300px x 600px');
			
			
			# Set destination path for the uploaded images.
			$uploadf1->setFolderName('about/');
			

			return $fields;
		}
	}

	class BoardDirectorPageController extends PageController {
		
	}
}
