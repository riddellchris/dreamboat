0. How are we going to confirm our designs and plans with all users to ensure they are most correct to solve the problem?

**

I believe, if we outline a plan that showcases our objectives, methods and criteria success that'd be a great start. We can implement a CI/CD methodology where we continuously engage with users on our plan, extract their feedback and implement it based on validity on functionality worldwide!
 In terms of design, I believe that investing in a freelancer to curate our web designs, fit for our specific requirements and needs will be highly beneficial. (Specifically, if we want to develop a mobile responsive design for the FlowTeam)
**

0.2. What are the ways we can start the engagement around (0) ASAP to start error correcting ASAP

**

In my opinion, I can act by asking my partner about our plans, designs, and logging her feedback vs our plan.
Other from that, I'm unsure of the confidentiality of sharing plans with people within our office.
reading this, i think that the answer is actually as much about really having clear goals and objectives for the technology and the system then just building it with people.
**

1. What are the critical endpoints and users that are required to ensure we build the system to meet everyone’s requirements

**

Could you expand on this? Specific api routes ?
Sorry I mean - use cases, users and scenarios not endpoints, more like touch points.
for example RMs at sites
central operators
executives
analysts
staff 

**

2. What are the critical modules that will need to be built

**

                - If we're specifically targeting Aged Care For Everyone:

I personally believe these are the key modules (Provider Module, User/FlowTeam Module, Shift/Shift-Bidding Module, Invoicing Module, Reporting Module) that we would need to have a robust system for providers and the FlowTeam:
Providers:
Shift Module: To create, view, update and delete a shift. Each shift should have robust fields, where we can ultimately report from it.
Provider Module: To have the ability to register my provider details and site details once and the data following through with all the module/s we've bought. (Quite a bit of uncertainties where, I will try pluck my good friends from goteam's mind)
Invoicing Module: To have an automated invoicing tool based on the hours worked.
Shift Module: To be notified if the shift I have posted has been picked up by a user from the FlowTeam.
Reporting Module: To have a reporting dashboard that reflects my provider's data.
Flow Team:
Employee Self Service Module: To have a tightly guarded scoped view of shifts available (Employee Self Service)
Shift Module: To have shifts sent to me based on location from the Site. E.G (I'm based in Victoria, I don't want to receive anything past 200km's from my home (Another uncertainty, do we want to add a setting where they can define a km range that they're willing to travel?))
FlowTeam Module: To have the ability where I can edit my user profile (update my home address, phone_number, email, etc)
Invoice Module: Ability to clock in and clock out (Almost replicating foundU application) using Aged Care For Everyone (Had some ideas regarding this. When the FlowTeam user clocks in and out, we can generate an invoice that will be approved from the provider (can be approved within the system))
Invoice Module: (Depending on the frequency of each pay run. I will assume it's fortnightly for this example) I want to receive an invoice of all the shifts I've picked up for the past two weeks. 
Providers & FlowTeam:
Invoice Module: Each shift that was picked up from the FlowTeam, should reflect into the system with a generated invoice and status (whether if it was approved by the provider's site)
This looks like an incredible start mate.
More granularity is required without doubt but this looks like an incredible start.

The only thing I'm aware this may be missing are actually two modules:
Cross module analytics
Cross module control systems

**

3. What and how do those modules then work through into coherent wireframes and ultimately systems

**

                I need to have a deeper think about it. I'll circle back to it tonight.

Great 
**

4. How do we best integrate the early versions of this system with great analytics

**

Easy! If we plan correctly, I could pinpoint all the data entered in Aged Care For Everyone and use OAuth2.0 via Laravel Passport.
Easiest way to think of Laravel Passport: Think of me having a New Zealand Passport, I would need to have a proper visa application to enter a specific country, without that visa application or passport, I wouldn't have the ability to enter the country. Same with our system! If we allow our Software's to have the "sufficient visa rights / passport" we can allow communication between the software’s
**

8. What hosting do we need to use to make this really work and be totally secure? Microsoft?

**

I'll try & get a rough quoting on these cloud platforms.
In my opinion, the big 3 should be great for Dreamboat and all our modules (Don't have super extensive experience and knowledge with Devops but from my experience with it from my previous endeavors).
Microsoft Azure: Azure Sentinel for threat detection and response, Azure Security Center (Essentially a security control center for any weaknesses) and Azure A/D or Entra ID which is an identity and access management.
Amazon Web Services: Identity and Access Management, encryption services, network security with Virtual Private cloud
Google Cloud Platform: Data encryption at rest & transit, Identity & Access Management, and a threat detection using Google Cloud Security Command Center
I bet that most providers are on microsoft - this would make this all easier.
Let's do this.

Related to this might be / are two other areas of concern and uncertainty:
1. What BCP planning do we need including backups of data/files and systems
 - especially if we are storing compliance docs, how can we remove all risk of loss of this? To the point of airgapped backups? duplicate storage systems, "one way transfer to backup systems" what do we need and how far can we go?
**

12. What elements of our future designs are going to be "nice to haves" that we can think of but ultimately not build

**

In my opinion, a "nice to have" functionality for Aged Care for Everyone, is to have a mobile application catered for Apple & Android where the providers/managers can create, view, update and delete shifts. FlowTeam to have the ability to accept, decline shifts and have a route where it contains their historical shifts that they've worked.  
**

14. How do we skin the Dreamboat platform to be and present as Aged Care For Everyone easiest?

**

Could you elaborate on this.
Ultimately we are working on the Dreamboat platform but we want it to appear as Aged Care for Everyone, so how do we do this best?
