# Regex-script-Html-choice-menu-to-Symfony-ChoiceType
Script transforming html choice menu into Symfony ChoiceType form 

Script reads file in HTML choice menu format :

<option value='us'>United States</option>		
<option value='af'>Afghanistan</option>
<option value='al'>Albania</option>
<option value='dz'>Algeria</option>

transforming to Symfony ChoiceType array-like format:

'United States'=>'us',
'Afghanistan'=>'af',
'Albania'=>'al',
'Algeria'=>'dz',

It may help for big choice menus you don't want to write manualy.
