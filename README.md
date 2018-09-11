Auto dispatch tickets
=====================

The module `sv-auto-dispatch` is an [iTop](https://www.combodo.com/itop-193) extension to add rules to automatically dispatch tickets to a team, depending on the selected service.
Because of the nature of the module, you need to install at least one of [Dispatch Incident to team](https://store.itophub.io/en_US/products/combodo-dispatch-incident) and [Dispatch User Request to a team](https://store.itophub.io/en_US/products/combodo-dispatch-userrequest). 

Installation
------------

Place this in the `extensions` folder of your iTop instance and run iTop setup again.
Be sure to enable the extension during setup.

Usage
-----

Create a new dispatch rule with a team (from your delivery model) and a timeout to define when after what time the ticket should be dispatched to that team.
Then you can specify on every service on the customer contract which dispatch rule (next to SLA) should be applied.
When a ticket for one of these services is created, it will automatically be dispatched to the selected team after the set timeout.
This of course only if not yet dispatched or assigned in the meantime.
