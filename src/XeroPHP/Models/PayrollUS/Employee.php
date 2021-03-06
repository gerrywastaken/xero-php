<?php

namespace XeroPHP\Models\PayrollUS;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollUS\Employee\HomeAddress;
use XeroPHP\Models\PayrollUS\Employee\MailingAddress;
use XeroPHP\Models\PayrollUS\Employee\SalaryAndWage;
use XeroPHP\Models\PayrollUS\Employee\WorkLocation;
use XeroPHP\Models\PayrollUS\Employee\PaymentMethod;
use XeroPHP\Models\PayrollUS\Employee\PayTemplate;
use XeroPHP\Models\PayrollUS\Employee\OpeningBalance;

class Employee extends Remote\Object {

    /**
     * First name of employee (max length = 35)
     *
     * @property string FirstName
     */

    /**
     * Last name of employee (max length = 35)
     *
     * @property string LastName
     */

    /**
     * Date of birth of employee (YYYY-MM-DD)
     *
     * @property \DateTime DateOfBirth
     */

    /**
     * Employee home address. See HomeAddress
     *
     * @property HomeAddress HomeAddress
     */

    /**
     * Middle name(s) of the employee (max length = 35)
     *
     * @property string[] MiddleNames
     */

    /**
     * Job Title of the employee
     *
     * @property string JobTitle
     */

    /**
     * Employee email address
     *
     * @property string Email
     */

    /**
     * Gender of employee (M or F)
     *
     * @property string Gender
     */

    /**
     * See MailingAddress
     *
     * @property MailingAddress MailingAddress
     */

    /**
     * Phone number of employee
     *
     * @property string Phone
     */

    /**
     * Employee Number
     *
     * @property string EmployeeNumber
     */

    /**
     * Social Security Number of the employee (xxx-xx-xxxx)
     *
     * @property string SocialSecurityNumber
     */

    /**
     * Start date of employee (YYYY-MM-DD)
     *
     * @property \DateTime StartDate
     */

    /**
     * Termination date of employee (YYYY-MM-DD). Note this is only returned when retrieving an individual
     * Employee with a Status of TERMINATED
     *
     * @property \DateTime TerminationDate
     */

    /**
     * Xero unique identifier – PayScheduleID for the employee
     *
     * @property string PayScheduleID
     */

    /**
     * Employee group name
     *
     * @property string EmployeeGroupName
     */

    /**
     * See Employment Basis Types
     *
     * @property string EmploymentBasis
     */

    /**
     * HolidayGroupID of the employee
     *
     * @property string HolidayGroupID
     */

    /**
     * Boolean to specify if employee is authorised to approve time off
     *
     * @property bool IsAuthorisedToApproveTimeOff
     */

    /**
     * Boolean to specify if employee is authorised to approve timesheets
     *
     * @property bool IsAuthorisedToApproveTimesheets
     */

    /**
     * See SalaryAndWages
     *
     * @property SalaryAndWage[] SalaryAndWages
     */

    /**
     * See WorkLocations
     *
     * @property WorkLocation[] WorkLocations
     */

    /**
     * See PaymentMethods
     *
     * @property PaymentMethod PaymentMethod
     */

    /**
     * See PayTemplate
     *
     * @property PayTemplate PayTemplate
     */

    /**
     * See OpeningBalances
     *
     * @property OpeningBalance[] OpeningBalances
     */

    /**
     * Xero unique identifier for an Employee
     *
     * @property string EmployeeID
     */

    /**
     * See Employee Status Types
     *
     * @property string Status
     */

    /**
     * Last modified timestamp
     *
     * @property \DateTime UpdatedDateUTC
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Employees';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Employee';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'EmployeeID';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods() {
        return array(
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_GET
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties() {
        return array(
            'FirstName' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'LastName' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'DateOfBirth' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'HomeAddress' => array (true, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Employee\\HomeAddress', false, false),
            'MiddleNames' => array (false, self::PROPERTY_TYPE_STRING, null, true, false),
            'JobTitle' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Email' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Gender' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'MailingAddress' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Employee\\MailingAddress', false, false),
            'Phone' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmployeeNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'SocialSecurityNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'StartDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'TerminationDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'PayScheduleID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmployeeGroupName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmploymentBasis' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'HolidayGroupID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'IsAuthorisedToApproveTimeOff' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'IsAuthorisedToApproveTimesheets' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'SalaryAndWages' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Employee\\SalaryAndWage', true, false),
            'WorkLocations' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Employee\\WorkLocation', true, false),
            'PaymentMethod' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Employee\\PaymentMethod', false, false),
            'PayTemplate' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Employee\\PayTemplate', false, false),
            'OpeningBalances' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Employee\\OpeningBalance', true, false),
            'EmployeeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false)
        );
    }


    /**
     * @return string
     */
    public function getFirstName() {
        return $this->_data['FirstName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setFirstName($value) {
        $this->propertyUpdated('FirstName', $value);
        $this->_data['FirstName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName() {
        return $this->_data['LastName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setLastName($value) {
        $this->propertyUpdated('LastName', $value);
        $this->_data['LastName'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth() {
        return $this->_data['DateOfBirth'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setDateOfBirth(\DateTime $value) {
        $this->propertyUpdated('DateOfBirth', $value);
        $this->_data['DateOfBirth'] = $value;
        return $this;
    }

    /**
     * @return HomeAddress
     */
    public function getHomeAddress() {
        return $this->_data['HomeAddress'];
    }

    /**
     * @param HomeAddress $value
     * @return Employee
     */
    public function setHomeAddress(HomeAddress $value) {
        $this->propertyUpdated('HomeAddress', $value);
        $this->_data['HomeAddress'] = $value;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMiddleNames() {
        return $this->_data['MiddleNames'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function addMiddleName($value) {
        $this->propertyUpdated('MiddleNames', $value);
        $this->_data['MiddleNames'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle() {
        return $this->_data['JobTitle'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setJobTitle($value) {
        $this->propertyUpdated('JobTitle', $value);
        $this->_data['JobTitle'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail() {
        return $this->_data['Email'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmail($value) {
        $this->propertyUpdated('Email', $value);
        $this->_data['Email'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender() {
        return $this->_data['Gender'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setGender($value) {
        $this->propertyUpdated('Gender', $value);
        $this->_data['Gender'] = $value;
        return $this;
    }

    /**
     * @return MailingAddress
     */
    public function getMailingAddress() {
        return $this->_data['MailingAddress'];
    }

    /**
     * @param MailingAddress $value
     * @return Employee
     */
    public function setMailingAddress(MailingAddress $value) {
        $this->propertyUpdated('MailingAddress', $value);
        $this->_data['MailingAddress'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone() {
        return $this->_data['Phone'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setPhone($value) {
        $this->propertyUpdated('Phone', $value);
        $this->_data['Phone'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeNumber() {
        return $this->_data['EmployeeNumber'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmployeeNumber($value) {
        $this->propertyUpdated('EmployeeNumber', $value);
        $this->_data['EmployeeNumber'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSocialSecurityNumber() {
        return $this->_data['SocialSecurityNumber'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setSocialSecurityNumber($value) {
        $this->propertyUpdated('SocialSecurityNumber', $value);
        $this->_data['SocialSecurityNumber'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate() {
        return $this->_data['StartDate'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setStartDate(\DateTime $value) {
        $this->propertyUpdated('StartDate', $value);
        $this->_data['StartDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTerminationDate() {
        return $this->_data['TerminationDate'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setTerminationDate(\DateTime $value) {
        $this->propertyUpdated('TerminationDate', $value);
        $this->_data['TerminationDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayScheduleID() {
        return $this->_data['PayScheduleID'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setPayScheduleID($value) {
        $this->propertyUpdated('PayScheduleID', $value);
        $this->_data['PayScheduleID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeGroupName() {
        return $this->_data['EmployeeGroupName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmployeeGroupName($value) {
        $this->propertyUpdated('EmployeeGroupName', $value);
        $this->_data['EmployeeGroupName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmploymentBasis() {
        return $this->_data['EmploymentBasis'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmploymentBasis($value) {
        $this->propertyUpdated('EmploymentBasis', $value);
        $this->_data['EmploymentBasis'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getHolidayGroupID() {
        return $this->_data['HolidayGroupID'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setHolidayGroupID($value) {
        $this->propertyUpdated('HolidayGroupID', $value);
        $this->_data['HolidayGroupID'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuthorisedToApproveTimeOff() {
        return $this->_data['IsAuthorisedToApproveTimeOff'];
    }

    /**
     * @param bool $value
     * @return Employee
     */
    public function setIsAuthorisedToApproveTimeOff($value) {
        $this->propertyUpdated('IsAuthorisedToApproveTimeOff', $value);
        $this->_data['IsAuthorisedToApproveTimeOff'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuthorisedToApproveTimesheets() {
        return $this->_data['IsAuthorisedToApproveTimesheets'];
    }

    /**
     * @param bool $value
     * @return Employee
     */
    public function setIsAuthorisedToApproveTimesheet($value) {
        $this->propertyUpdated('IsAuthorisedToApproveTimesheets', $value);
        $this->_data['IsAuthorisedToApproveTimesheets'] = $value;
        return $this;
    }

    /**
     * @return SalaryAndWage[]
     */
    public function getSalaryAndWages() {
        return $this->_data['SalaryAndWages'];
    }

    /**
     * @param SalaryAndWage $value
     * @return Employee
     */
    public function addSalaryAndWage(SalaryAndWage $value) {
        $this->propertyUpdated('SalaryAndWages', $value);
        $this->_data['SalaryAndWages'][] = $value;
        return $this;
    }

    /**
     * @return WorkLocation[]
     */
    public function getWorkLocations() {
        return $this->_data['WorkLocations'];
    }

    /**
     * @param WorkLocation $value
     * @return Employee
     */
    public function addWorkLocation(WorkLocation $value) {
        $this->propertyUpdated('WorkLocations', $value);
        $this->_data['WorkLocations'][] = $value;
        return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod() {
        return $this->_data['PaymentMethod'];
    }

    /**
     * @param PaymentMethod $value
     * @return Employee
     */
    public function setPaymentMethod(PaymentMethod $value) {
        $this->propertyUpdated('PaymentMethod', $value);
        $this->_data['PaymentMethod'] = $value;
        return $this;
    }

    /**
     * @return PayTemplate
     */
    public function getPayTemplate() {
        return $this->_data['PayTemplate'];
    }

    /**
     * @param PayTemplate $value
     * @return Employee
     */
    public function setPayTemplate(PayTemplate $value) {
        $this->propertyUpdated('PayTemplate', $value);
        $this->_data['PayTemplate'] = $value;
        return $this;
    }

    /**
     * @return OpeningBalance[]
     */
    public function getOpeningBalances() {
        return $this->_data['OpeningBalances'];
    }

    /**
     * @param OpeningBalance $value
     * @return Employee
     */
    public function addOpeningBalance(OpeningBalance $value) {
        $this->propertyUpdated('OpeningBalances', $value);
        $this->_data['OpeningBalances'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeID() {
        return $this->_data['EmployeeID'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmployeeID($value) {
        $this->propertyUpdated('EmployeeID', $value);
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->_data['Status'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC() {
        return $this->_data['UpdatedDateUTC'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setUpdatedDateUTC(\DateTime $value) {
        $this->propertyUpdated('UpdatedDateUTC', $value);
        $this->_data['UpdatedDateUTC'] = $value;
        return $this;
    }


}