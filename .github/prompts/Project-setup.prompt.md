---
mode: agent
---
I want to create model, migration, factory and seeder for the following models:

## Organization:
- **Model**: `Organization`
- **Fields**:
  - OrgName (string, required)
  - LegalName (string, required)
  - RegistrationNumber (string, unique)
  - TaxNumber (string, nullable)
  - Address (text, nullable)
  - ContactPerson (string, required)
  - PersonPosition (string, nullable)
  - ContactNumber (string, required)
  - EmailID (string, required, unique)
  - ActiveFlag (boolean, default: true)
  - OrgCity (string, required)
  - OrgCountry (string, required)
  - CreationDate (timestamp)
  - CreatedBy (foreign key to users table)
  - LastModifiedDate (timestamp)
  - LastModifiedBy (foreign key to users table)

## Banks:
- **Model**: `Bank`
- **Fields**:
  - OrgID (foreign key to organizations table)
  - BankID (string, unique)
  - BankName (string, required)
  - Address (text, nullable)
  - AccountNumber (string, required)
  - IBANNumber (string, nullable)
  - SwiftCode (string, nullable)
  - Type (string, nullable)
  - Currency (string, required)
  - ActiveFlag (boolean, default: true)
  - CreationDate (timestamp)
  - CreatedBy (foreign key to users table)
  - LastModifiedDate (timestamp)
  - LastModifiedBy (foreign key to users table)

## Currency:
- **Model**: `Currency`
- **Fields**:
  - CurrencyCode (string, required)
  - CurrencyName (string, required)
  - CurrencyCountry (string, required)
  - ExRate (decimal, required)
  - ActiveFlag (boolean, default: true)
  - CreationDate (timestamp)
  - CreatedBy (foreign key to users table)
  - LastModifiedDate (timestamp)
  - LastModifiedBy (foreign key to users table)

## LegalTerm:
- **Model**: `LegalTerm`
- **Fields**:
  - OrgID (foreign key to organizations table)
  - TermsCode (string, required)
  - TermsSerial (string, required)
  - TermsTitle (string, required)
  - TermsCategory (string, required)
  - TermsDescription (text, nullable)
  - TermsVersion (string, required)
  - ValidFrom (date, required)
  - ValidTo (date, nullable)
  - ActiveFlag (boolean, default: true)
  - CreationDate (timestamp)
  - CreatedBy (foreign key to users table)
  - LastModifiedDate (timestamp)
  - LastModifiedBy (foreign key to users table)

## PortsMaster:
- **Model**: `Port`
- **Fields**:
  - PortCode (string, required)
  - PortName (string, required)
  - PortCountry (string, required)
  - PortType (string, required)
  - Longitude (decimal, nullable)
  - Lattitude (decimal, nullable)
  - TimeZone (string, nullable)
  - VesselSize (string, nullable)
  - MaxDraft (decimal, nullable)
  - ActiveFlag (boolean, default: true)
  - CreationDate (timestamp)
  - CreatedBy (foreign key to users table)
  - LastModifiedDate (timestamp)
  - LastModifiedBy (foreign key to users table)
