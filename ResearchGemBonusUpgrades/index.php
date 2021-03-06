<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<h6>Gem Based Research Upgrade Slots</h6>
<p><b>Spellcraft</b>
<p><b>S270</b> - <b>For</b>: All Factions - <b>Research Name</b>: Runecarving 
<p><b>Requirement</b>: 500,000 clicks (This game) 
<p><b>Cost</b>: 175.2 SxQig (1.752E173) 
<p><b>Effect</b>: Increase the production of all buildings based on your bonus from Gems. 
<p><b>Formula</b>: round(1.15*x^0.75)%, where x is your gem bonus.
<p><b>------------------------------</p></b>
<p><b>Craftsmanship</b>
<p><b>C120</b> - <b>For</b>: All Factions - <b>Research Name</b>: Socketing 
<p><b>Requirement</b>: 200,000 clicks (This Game) 
<p><b>Cost</b>: 676 Spqag (6.76E146) 
<p><b>Effect</b>: Increase clicking reward based on the amount of gems you own. 
<p><b>Formula</b>: round(20 * log10(1 + x))%, where x is your current number of gems.
<br/>
<br/>
<p><b>C175</b> - <b>For</b>: Goblin - <b>Research Name</b>: Gemcutting 
<p><b>Requirement</b>: Research Refining (C50) &amp; Socketing (C120) 
<p><b>Cost</b>: 3.273 Uqig (3.273E156) 
<p><b>Effect</b>: Increase the production bonus from gems based on the number of buildings you own. 
<p><b>Formula</b>: floor(x / 2000)%, where x is your Buildings Owned (This Game) stat.
<br/>
<br/>
<p><b>C340</b> - <b>For</b>: All Factions - <b>Research Name</b>: Gem Duster 
<p><b>Requirement</b>: 800 Gem Grinders (This R),Research Sifting (E260) &amp; Surveyorship (E290) 
<p><b>Cost</b>: 371.5 Sxg (3.715E185) 
<p><b>Effect</b>: Increase production bonus from gems based on the amount of Rubies you collected. (Multiplicative) 
<p><b>Formula</b>: floor(10 * x), where x is your Rubies Gained (All Time) stat.
<br/>
<br/>
<p><b>C500</b> - <b>For</b>: All Factions - <b>Research Name</b>: Minecrafting 
<p><b>Requirement</b>: 3250 excavations (as Dwarf) 
<p><b>Cost</b>: 5.554Spg (5.554E213) 
<p><b>Effect</b>: Increases production bonus from gems based on the amount of excavations you made. 
<p><b>Formula</b>: 3 * x^0.35%, where x is the amount of Excavations you made.
<br/>
<br/>
<p><b>C1300</b> - <b>For</b>: Neutral,Dragon - <b>Research Name</b>: Scintillation
<p><b>Requirement</b>: 30000 Max Mana, Any Neutral,Dragon (This game)
<p><b>Cost</b>: 18.27 Tvg (1.827E73)
<p><b>Effect</b>: Increase production bonus from gems based on maximum mana.
<p><b>Formula</b>: 2 * x^0.4, where x is max mana
<p><b>------------------------------</p></b>
<p><b>Divine</b>
<p><b>D135</b> - <b>For</b>: All Factions - <b>Research Name</b>: Illumination 
<p><b>Requirement</b>: 250 m/s Mana Regen(as Angel) 
<p><b>Cost</b>: 296 Ocqag (2.96E149) 
<p><b>Effect</b>: Increases mana regeneration based on the amount of gems you own. 
<p><b>Formula</b>: floor(1.25 * ln(1 + x)) / 10, where x is amount of gems you own.
<p><b>------------------------------</p></b>
<p><b>Economics</b>
<p><b>E320</b> - <b>For</b>: All Factions - <b>Research Name</b>: Smuggling 
<p><b>Requirement</b>: Have 2x Gems in Abdication Treasury 
<p><b>Cost</b>: 1.117 NoQig (1.117E180) 
<p><b>Effect</b>: Increase production bonus from gems based on the gems you have in your abdication treasury. 
<p><b>Formula</b>: floor(0.45 * log10(1+ x)), where x is the amount of gems you will gain upon abdication.
<br/>
<br/>
<p><b>E400</b> - <b>For</b>: All Factions - <b>Research Name</b>: Conversion 
<p><b>Requirement</b>: Research Philosopher's Stone (A250) &amp; Repurpose (E350). 
<p><b>Cost</b>: 13.66 QaSxg (1.366E196) 
<p><b>Effect</b>: Increase production bonus from Gems based on your Royal Exchange bonus. 
<p><b>Formula</b>: floor(x^0.95)%, where x is your Royal Exchange Bonus.
<br/>
<br/>
<p><b>E495</b> - <b>For</b>: Drow - <b>Research Name</b>: Jewellery 
<p><b>Requirement</b>: 12000 Unique Buildings (as Dwarf) 
<p><b>Cost</b>: 731.4 NoSxg (7.314E212) 
<p><b>Effect</b>: Increase the production bonus from gems based on the amount of Spider Sanctuaries you own. 
<p><b>Formula</b>: x^0.8 / 20%, where x is the number of Spider Sanctuaries you own.
<p><b>------------------------------</p></b>
<p><b>Alchemy</b>
<p><b>A250</b> - <b>For</b>: All Factions - <b>Research Name</b>: Philosopher's Stone 
<p><b>Requirement</b>: Research Transmutation (A10) &amp; Empowered Luck (S175) 
<p><b>Cost</b>: 52.7 Qiqig (5.27E169) 
<p><b>Effect</b>: Increase production bonus from gems based on the amount of research made. 
<p><b>Formula</b>: floor(x^0.9 / 25)%, where x is the amount of research made.
<?php include "../scripts/footer.html"; ?>
