<?php
/**
 * File for the class which returns the class map definition
 * @package Microbilt
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * Class which returns the class map definition by the static method MicrobiltClassMap::classMap()
 * @package Microbilt
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'ACHInfo_Type' => 'MicrobiltStructACHInfo_Type',
  'AKAInfo_Type' => 'MicrobiltStructAKAInfo_Type',
  'AccidentLocation_Type' => 'MicrobiltStructAccidentLocation_Type',
  'AccidentStatistics_Type' => 'MicrobiltStructAccidentStatistics_Type',
  'AccidentTime_Type' => 'MicrobiltStructAccidentTime_Type',
  'Accident_Type' => 'MicrobiltStructAccident_Type',
  'AccountingInfo_Type' => 'MicrobiltStructAccountingInfo_Type',
  'AcctAttributeInfo_Type' => 'MicrobiltStructAcctAttributeInfo_Type',
  'AdditionalStatus_Type' => 'MicrobiltStructAdditionalStatus_Type',
  'AddressInfo_Type' => 'MicrobiltStructAddressInfo_Type',
  'Aggregate' => 'MicrobiltStructAggregate',
  'AircraftInfo_Type' => 'MicrobiltStructAircraftInfo_Type',
  'AmtItems_Type' => 'MicrobiltStructAmtItems_Type',
  'Answers_Type' => 'MicrobiltStructAnswers_Type',
  'ApplicantData_Type' => 'MicrobiltStructApplicantData_Type',
  'Associate_Type' => 'MicrobiltStructAssociate_Type',
  'Attachment_Type' => 'MicrobiltStructAttachment_Type',
  'AuthConfig_Type' => 'MicrobiltStructAuthConfig_Type',
  'AutomobileExtras_Type' => 'MicrobiltStructAutomobileExtras_Type',
  'AutomobileInfo_Type' => 'MicrobiltStructAutomobileInfo_Type',
  'AvailableProducts_Type' => 'MicrobiltStructAvailableProducts_Type',
  'BankAccount_Type' => 'MicrobiltStructBankAccount_Type',
  'BankStatement_Type' => 'MicrobiltStructBankStatement_Type',
  'Boolean' => 'MicrobiltEnumBoolean',
  'BusinessInquiry_Type' => 'MicrobiltStructBusinessInquiry_Type',
  'BusinessSummary_Type' => 'MicrobiltStructBusinessSummary_Type',
  'CRASummary_Type' => 'MicrobiltStructCRASummary_Type',
  'CategoryInfo_Type' => 'MicrobiltStructCategoryInfo_Type',
  'ChargeOff_Type' => 'MicrobiltStructChargeOff_Type',
  'Charge_Type' => 'MicrobiltStructCharge_Type',
  'CharterInfo_Type' => 'MicrobiltStructCharterInfo_Type',
  'ChildrenInfo_Type' => 'MicrobiltStructChildrenInfo_Type',
  'CivilCourt_Type' => 'MicrobiltStructCivilCourt_Type',
  'ClosureInfo_Type' => 'MicrobiltStructClosureInfo_Type',
  'CodeDescription_Type' => 'MicrobiltStructCodeDescription_Type',
  'CollateralInfo_Type' => 'MicrobiltStructCollateralInfo_Type',
  'Collection_Type' => 'MicrobiltStructCollection_Type',
  'CommercialAmounts_Type' => 'MicrobiltStructCommercialAmounts_Type',
  'CommercialCollectionInfo_Type' => 'MicrobiltStructCommercialCollectionInfo_Type',
  'CommercialDates_Type' => 'MicrobiltStructCommercialDates_Type',
  'CommercialEntityInfo_Type' => 'MicrobiltStructCommercialEntityInfo_Type',
  'CommercialExecutiveSummary_Type' => 'MicrobiltStructCommercialExecutiveSummary_Type',
  'CommercialFilings_Type' => 'MicrobiltStructCommercialFilings_Type',
  'CommercialLeasingInfo_Type' => 'MicrobiltStructCommercialLeasingInfo_Type',
  'CommercialPmtInfo_Type' => 'MicrobiltStructCommercialPmtInfo_Type',
  'CommercialPmtTotals_Type' => 'MicrobiltStructCommercialPmtTotals_Type',
  'CommercialPmtTrends_Type' => 'MicrobiltStructCommercialPmtTrends_Type',
  'CommercialPublicRecords_Type' => 'MicrobiltStructCommercialPublicRecords_Type',
  'CommercialUCCSummary_Type' => 'MicrobiltStructCommercialUCCSummary_Type',
  'CommercialUCC_Type' => 'MicrobiltStructCommercialUCC_Type',
  'CompAmt_Type' => 'MicrobiltStructCompAmt_Type',
  'CompanyHistory_Type' => 'MicrobiltStructCompanyHistory_Type',
  'Conditions_Type' => 'MicrobiltStructConditions_Type',
  'ConsumerStatement_Type' => 'MicrobiltStructConsumerStatement_Type',
  'ContactInfo_Type' => 'MicrobiltStructContactInfo_Type',
  'CorpInquiry_Type' => 'MicrobiltStructCorpInquiry_Type',
  'CorpLinkageSummary_Type' => 'MicrobiltStructCorpLinkageSummary_Type',
  'CorporateCreditRating_Type' => 'MicrobiltStructCorporateCreditRating_Type',
  'CorporateDemographicInfo_Type' => 'MicrobiltStructCorporateDemographicInfo_Type',
  'CorporateLinkageInfo_Type' => 'MicrobiltStructCorporateLinkageInfo_Type',
  'CourtInfo_Type' => 'MicrobiltStructCourtInfo_Type',
  'CreditCardInfo_Type' => 'MicrobiltStructCreditCardInfo_Type',
  'CreditRating_Type' => 'MicrobiltStructCreditRating_Type',
  'CriminalCase_Type' => 'MicrobiltStructCriminalCase_Type',
  'CurrencyAmount' => 'MicrobiltStructCurrencyAmount',
  'DTApplicationVariables_Type' => 'MicrobiltStructDTApplicationVariables_Type',
  'DataIndicators_Type' => 'MicrobiltStructDataIndicators_Type',
  'DateRange_Type' => 'MicrobiltStructDateRange_Type',
  'DebtSummary_Type' => 'MicrobiltStructDebtSummary_Type',
  'DecisionInfo_Type' => 'MicrobiltStructDecisionInfo_Type',
  'DecisionTableDetails_Type' => 'MicrobiltStructDecisionTableDetails_Type',
  'DecisionTableSummary_Type' => 'MicrobiltStructDecisionTableSummary_Type',
  'DecisionTable_Type' => 'MicrobiltStructDecisionTable_Type',
  'Decision_Type' => 'MicrobiltStructDecision_Type',
  'DocumentInfo_Type' => 'MicrobiltStructDocumentInfo_Type',
  'DriversLicense_Type' => 'MicrobiltStructDriversLicense_Type',
  'EBAddOns_Type' => 'MicrobiltStructEBAddOns_Type',
  'EconomicInfo_Type' => 'MicrobiltStructEconomicInfo_Type',
  'ElementsInfo_Type' => 'MicrobiltStructElementsInfo_Type',
  'EmploymentHistory_Type' => 'MicrobiltStructEmploymentHistory_Type',
  'Event_Type' => 'MicrobiltStructEvent_Type',
  'EvictionsCase_Type' => 'MicrobiltStructEvictionsCase_Type',
  'EvictionsDates_Type' => 'MicrobiltStructEvictionsDates_Type',
  'ExStdRq_Type' => 'MicrobiltStructExStdRq_Type',
  'ExStdRs_Type' => 'MicrobiltStructExStdRs_Type',
  'ExchangeRateInfo_Type' => 'MicrobiltStructExchangeRateInfo_Type',
  'FilingsInfo_Type' => 'MicrobiltStructFilingsInfo_Type',
  'FinancialSummary_Type' => 'MicrobiltStructFinancialSummary_Type',
  'FraudValidations_Type' => 'MicrobiltStructFraudValidations_Type',
  'Fraud_Type' => 'MicrobiltStructFraud_Type',
  'FriendsConnectionsInfo_Type' => 'MicrobiltStructFriendsConnectionsInfo_Type',
  'GEOCode_Type' => 'MicrobiltStructGEOCode_Type',
  'GetArchiveReport' => 'MicrobiltStructGetArchiveReport',
  'GetArchiveReportResponse' => 'MicrobiltStructGetArchiveReportResponse',
  'GetRawReport' => 'MicrobiltStructGetRawReport',
  'GetRawReportResponse' => 'MicrobiltStructGetRawReportResponse',
  'GetReport' => 'MicrobiltStructGetReport',
  'GetReportResponse' => 'MicrobiltStructGetReportResponse',
  'GovtDebarredContractorInfo_Type' => 'MicrobiltStructGovtDebarredContractorInfo_Type',
  'GovtFinancialExperiences_Type' => 'MicrobiltStructGovtFinancialExperiences_Type',
  'HighLowAmtRange_Type' => 'MicrobiltStructHighLowAmtRange_Type',
  'HuntingFishingLicense_Type' => 'MicrobiltStructHuntingFishingLicense_Type',
  'Incarceration_Type' => 'MicrobiltStructIncarceration_Type',
  'IncomeInfo_Type' => 'MicrobiltStructIncomeInfo_Type',
  'IndustId_Type' => 'MicrobiltStructIndustId_Type',
  'Ineligibility_Type' => 'MicrobiltStructIneligibility_Type',
  'InformationDetail_Type' => 'MicrobiltStructInformationDetail_Type',
  'InformationSummary_Type' => 'MicrobiltStructInformationSummary_Type',
  'InqCountInfo_Type' => 'MicrobiltStructInqCountInfo_Type',
  'Inquiry_Type' => 'MicrobiltStructInquiry_Type',
  'InstantMessagingInfo_Type' => 'MicrobiltStructInstantMessagingInfo_Type',
  'InternationalCourtInfo_Type' => 'MicrobiltStructInternationalCourtInfo_Type',
  'InternetDomain_Type' => 'MicrobiltStructInternetDomain_Type',
  'IntlCourtDetailsInfo_Type' => 'MicrobiltStructIntlCourtDetailsInfo_Type',
  'IntlCourtElementsInfo_Type' => 'MicrobiltStructIntlCourtElementsInfo_Type',
  'IntlCourtPeriodInfo_Type' => 'MicrobiltStructIntlCourtPeriodInfo_Type',
  'InvalidAnswers_Type' => 'MicrobiltStructInvalidAnswers_Type',
  'Investigation_Type' => 'MicrobiltStructInvestigation_Type',
  'KeyIndustrySectorTrends_Type' => 'MicrobiltStructKeyIndustrySectorTrends_Type',
  'LegalFormsInfo_Type' => 'MicrobiltStructLegalFormsInfo_Type',
  'LiabilitySummary_Type' => 'MicrobiltStructLiabilitySummary_Type',
  'Liability_Type' => 'MicrobiltStructLiability_Type',
  'LienHolderInfo_Type' => 'MicrobiltStructLienHolderInfo_Type',
  'LoanInfo_Type' => 'MicrobiltStructLoanInfo_Type',
  'LoanParams_Type' => 'MicrobiltStructLoanParams_Type',
  'LoanRequestInfo_Type' => 'MicrobiltStructLoanRequestInfo_Type',
  'MICRInfo_Type' => 'MicrobiltStructMICRInfo_Type',
  'Map' => 'MicrobiltStructMap',
  'MapResponse' => 'MicrobiltStructMapResponse',
  'Message_Type' => 'MicrobiltStructMessage_Type',
  'MilitaryIdInfo_Type' => 'MicrobiltStructMilitaryIdInfo_Type',
  'MinMaxRange_Type' => 'MicrobiltStructMinMaxRange_Type',
  'MsgRqHdr_Type' => 'MicrobiltStructMsgRqHdr_Type',
  'MsgRsHdr_Type' => 'MicrobiltStructMsgRsHdr_Type',
  'NeighborhoodResident_Type' => 'MicrobiltStructNeighborhoodResident_Type',
  'Neighborhood_Type' => 'MicrobiltStructNeighborhood_Type',
  'OFAC_Type' => 'MicrobiltStructOFAC_Type',
  'OffenderRef_Type' => 'MicrobiltStructOffenderRef_Type',
  'OfficersDirectors_Type' => 'MicrobiltStructOfficersDirectors_Type',
  'Option_Type' => 'MicrobiltStructOption_Type',
  'OrgId_Type' => 'MicrobiltStructOrgId_Type',
  'OrgInfo_Type' => 'MicrobiltStructOrgInfo_Type',
  'OriginalUCCInfo_Type' => 'MicrobiltStructOriginalUCCInfo_Type',
  'OtherAmounts_Type' => 'MicrobiltStructOtherAmounts_Type',
  'OtherPercentages_Type' => 'MicrobiltStructOtherPercentages_Type',
  'OtherTaxId_Type' => 'MicrobiltStructOtherTaxId_Type',
  'ParoleSentenceInfo_Type' => 'MicrobiltStructParoleSentenceInfo_Type',
  'Parties_Type' => 'MicrobiltStructParties_Type',
  'PassportInfo_Type' => 'MicrobiltStructPassportInfo_Type',
  'PastDuePeriods_Type' => 'MicrobiltStructPastDuePeriods_Type',
  'PathInfo_Type' => 'MicrobiltStructPathInfo_Type',
  'PaymentInfo_Type' => 'MicrobiltStructPaymentInfo_Type',
  'PeriodInfo_Type' => 'MicrobiltStructPeriodInfo_Type',
  'PersonInfo_Type' => 'MicrobiltStructPersonInfo_Type',
  'PersonName_Type' => 'MicrobiltStructPersonName_Type',
  'PhoneInfo_Type' => 'MicrobiltStructPhoneInfo_Type',
  'PhoneNum_Type' => 'MicrobiltStructPhoneNum_Type',
  'PhysicalCharacteristics_Type' => 'MicrobiltStructPhysicalCharacteristics_Type',
  'PmtAgreement_Type' => 'MicrobiltStructPmtAgreement_Type',
  'PostAddr_Type' => 'MicrobiltStructPostAddr_Type',
  'PrisonSentenceInfo_Type' => 'MicrobiltStructPrisonSentenceInfo_Type',
  'ProfileStatusInfo_Type' => 'MicrobiltStructProfileStatusInfo_Type',
  'PublicRecord_Type' => 'MicrobiltStructPublicRecord_Type',
  'QFInformation_Type' => 'MicrobiltStructQFInformation_Type',
  'QFProdOffer_Type' => 'MicrobiltStructQFProdOffer_Type',
  'QuarterlyTrends_Type' => 'MicrobiltStructQuarterlyTrends_Type',
  'QuestionConfig_Type' => 'MicrobiltStructQuestionConfig_Type',
  'QuestionsAnswers_Type' => 'MicrobiltStructQuestionsAnswers_Type',
  'Rating_Type' => 'MicrobiltStructRating_Type',
  'RegisteredCharge_Type' => 'MicrobiltStructRegisteredCharge_Type',
  'RegisteredChargesDetails_Type' => 'MicrobiltStructRegisteredChargesDetails_Type',
  'RegisteredChargesInfo_Type' => 'MicrobiltStructRegisteredChargesInfo_Type',
  'RegisteredChargesSummary_Type' => 'MicrobiltStructRegisteredChargesSummary_Type',
  'RegistrationDetails_Type' => 'MicrobiltStructRegistrationDetails_Type',
  'Relative_Type' => 'MicrobiltStructRelative_Type',
  'Release_Type' => 'MicrobiltStructRelease_Type',
  'Report_Type' => 'MicrobiltStructReport_Type',
  'RequestType' => 'MicrobiltEnumRequestType',
  'SchoolInfo_Type' => 'MicrobiltStructSchoolInfo_Type',
  'Score_Type' => 'MicrobiltStructScore_Type',
  'SecurityQuestions_Type' => 'MicrobiltStructSecurityQuestions_Type',
  'SentenceLength_Type' => 'MicrobiltStructSentenceLength_Type',
  'Severity_Type' => 'MicrobiltEnumSeverity_Type',
  'SexualOffense_Type' => 'MicrobiltStructSexualOffense_Type',
  'ShareCapitalSummary_Type' => 'MicrobiltStructShareCapitalSummary_Type',
  'ShareCapital_Type' => 'MicrobiltStructShareCapital_Type',
  'Shareholders_Type' => 'MicrobiltStructShareholders_Type',
  'SmallBusinessAdvisorySummary_Type' => 'MicrobiltStructSmallBusinessAdvisorySummary_Type',
  'SocialNetworkProfileInfo_Type' => 'MicrobiltStructSocialNetworkProfileInfo_Type',
  'SpouseInfo_Type' => 'MicrobiltStructSpouseInfo_Type',
  'StandardAndPoorsInfo_Type' => 'MicrobiltStructStandardAndPoorsInfo_Type',
  'Status_Type' => 'MicrobiltStructStatus_Type',
  'StockExchangeInfo_Type' => 'MicrobiltStructStockExchangeInfo_Type',
  'SubQuestions_Type' => 'MicrobiltStructSubQuestions_Type',
  'Subject' => 'MicrobiltStructSubject',
  'SubjectConfirmation_Type' => 'MicrobiltStructSubjectConfirmation_Type',
  'SummaryCharacteristics' => 'MicrobiltStructSummaryCharacteristics',
  'SummaryCharacteristics_Type' => 'MicrobiltStructSummaryCharacteristics_Type',
  'SummaryCountTimeFrame_Type' => 'MicrobiltStructSummaryCountTimeFrame_Type',
  'SummaryItem' => 'MicrobiltStructSummaryItem',
  'SummaryItem_Type' => 'MicrobiltStructSummaryItem_Type',
  'Summary_Type' => 'MicrobiltStructSummary_Type',
  'TINInfo_Type' => 'MicrobiltStructTINInfo_Type',
  'TradeCountries_Type' => 'MicrobiltStructTradeCountries_Type',
  'TradeReferenceDetailInfo_Type' => 'MicrobiltStructTradeReferenceDetailInfo_Type',
  'TradeReferenceElementInfo_Type' => 'MicrobiltStructTradeReferenceElementInfo_Type',
  'TradeReferenceSummary_Type' => 'MicrobiltStructTradeReferenceSummary_Type',
  'TransactionFee_Type' => 'MicrobiltStructTransactionFee_Type',
  'Transaction_Type' => 'MicrobiltStructTransaction_Type',
  'Transactions_Type' => 'MicrobiltStructTransactions_Type',
  'Transform' => 'MicrobiltStructTransform',
  'TransformResponse' => 'MicrobiltStructTransformResponse',
  'UCC_Type' => 'MicrobiltStructUCC_Type',
  'ValidationInfo_Type' => 'MicrobiltStructValidationInfo_Type',
  'VariableInfo_Type' => 'MicrobiltStructVariableInfo_Type',
  'VehicleInfo_Type' => 'MicrobiltStructVehicleInfo_Type',
  'VesselInfo_Type' => 'MicrobiltStructVesselInfo_Type',
  'VictimInfo_Type' => 'MicrobiltStructVictimInfo_Type',
  'Violation_Type' => 'MicrobiltStructViolation_Type',
  'VoterRegistration_Type' => 'MicrobiltStructVoterRegistration_Type',
  'WeaponPermit_Type' => 'MicrobiltStructWeaponPermit_Type',
);
    }
}
