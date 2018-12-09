describe('Listening Test Webadresse', function() {
  it('Visits the Kuscheltier Site', function() {
    cy.visit('http://kuscheltier.local/KuscheltierPaul/Website/index.php')
  })
})

describe('Listening Test IP-Adresse', function() {
  it('Visits the Kuscheltier Site', function() {
    cy.visit('192.168.4.1')
  })
})

describe('Menubar One Testing', function() {
  it('Visits the Kuscheltier Site', function() {
	cy.visit('192.168.4.1')
	cy.contains('Startseite').click()
	cy.url().should('include', '/index.php')
	cy.contains('Kuscheltier Paul').click()
	cy.url().should('include', '/index.php')
	
	cy.visit('192.168.4.1')
    cy.contains('Medikamente erinnern').click()
	cy.url().should('include', '/medikamente_index.php')
	cy.contains('Kuscheltier Paul').click()
	cy.url().should('include', '/index.php')
	
	cy.visit('192.168.4.1')
	cy.contains('Terminplanung').click()
	cy.url().should('include', '/termine_index.php')
	cy.contains('Kuscheltier Paul').click()
	cy.url().should('include', '/index.php')
	
	cy.visit('192.168.4.1')
	cy.contains('Bücher vorlesen').click()
	cy.url().should('include', '/buecher_index.php')
	cy.contains('Kuscheltier Paul').click()
	cy.url().should('include', '/index.php')
	
	cy.visit('192.168.4.1')
	cy.contains('Notfallsignal').click()
	cy.url().should('include', '/notfallsignal_index.php')
	cy.contains('Kuscheltier Paul').click()
	cy.url().should('include', '/index.php')
  })
})

describe('Startseite Menubar Testing', function() {
  it('clicks the Menubarelements', function() {
    cy.visit('192.168.4.1')
	cy.url().should('include', '/index.php')
	
	cy.visit('192.168.4.1')
	cy.contains('Startseite').click()
	cy.url().should('include', '/index.php')
	
	cy.visit('192.168.4.1')
    cy.contains('Medikamente erinnern').click()
	cy.url().should('include', '/medikamente_index.php')
	
	cy.visit('192.168.4.1')
	cy.contains('Terminplanung').click()
	cy.url().should('include', '/termine_index.php')
	
	cy.visit('192.168.4.1')
	cy.contains('Bücher vorlesen').click()
	cy.url().should('include', '/buecher_index.php')
	
	cy.visit('192.168.4.1')
	cy.contains('Notfallsignal').click()
	cy.url().should('include', '/notfallsignal_index.php')
  })
})

describe('Other Menubar Testing', function() {
  it('clicks the Menubarelements', function() {
    cy.visit('192.168.4.1')
	cy.url().should('include', '/index.php')
	
	cy.contains('Startseite').click()
	cy.url().should('include', '/index.php')
	
    cy.contains('Medikamente erinnern').click()
	cy.url().should('include', '/medikamente_index.php')
	
	cy.contains('Terminplanung').click()
	cy.url().should('include', '/termine_index.php')
	
	cy.contains('Bücher vorlesen').click()
	cy.url().should('include', '/buecher_index.php')
	
	cy.contains('Notfallsignal').click()
	cy.url().should('include', '/notfallsignal_index.php')
  })
})


describe('Startseite Hilfe Testing', function() {
  it('clicks the Menubarelements', function() {
    cy.visit('192.168.4.1')
	cy.url().should('include', '/index.php')
	
	cy.contains('Hilfe').click()
	cy.url().should('include', '/index.php')
	
	cy.contains('Hilfe schließen').click()
  })
})

describe('Medikamente Hilfe Testing', function() {
  it('clicks the Helpsites', function() {
    cy.visit('192.168.4.1')
	cy.url().should('include', '/index.php')
	
	cy.contains('Medikamente erinnern').click()
	cy.url().should('include', '/medikamente_index.php')
	
	cy.contains('Hilfe').click()
	cy.contains('Hilfe schließen').click()
	cy.url().should('include', '/medikamente_index.php')
  })
})

describe('Terminplanung Hilfe Testing', function() {
  it('clicks the Helpsites', function() {
    cy.visit('192.168.4.1')
	cy.url().should('include', '/index.php')
	
	cy.contains('Terminplanung').click()
	cy.url().should('include', '/termine_index.php')
	
	cy.contains('Hilfe').click()
	cy.contains('Hilfe schließen').click()
	cy.url().should('include', '/termine_index.php')
  })
})

describe('Bücher Hilfe Testing', function() {
  it('clicks the Helpsites', function() {
    cy.visit('192.168.4.1')
	cy.url().should('include', '/index.php')
	
	cy.contains('Bücher vorlesen').click()
	cy.url().should('include', '/buecher_index.php')
	
	cy.contains('Hilfe').click()
	cy.contains('Hilfe schließen').click()
	cy.url().should('include', '/buecher_index.php')
  })
})

describe('Notfallsignal Hilfe Testing', function() {
  it('clicks the Helpsites', function() {
    cy.visit('192.168.4.1')
	cy.url().should('include', '/index.php')
	
	cy.contains('Notfallsignal').click()
	cy.url().should('include', '/notfallsignal_index.php')
	
	cy.contains('Hilfe').click()
	cy.contains('Hilfe schließen').click()
	cy.url().should('include', '/notfallsignal_index.php')
  })
})

describe('Medikamente Add Testing', function() {
  it('Fügt ein Medikament hinzu', function() {
    cy.visit('192.168.4.1')

    cy.contains('Medikamente erinnern').click()
	cy.url().should('include', '/medikamente_index.php')
	
	cy.contains('Medikament hinzufügen').click()
	cy.url().should('include', '/medikamente_neu.php')
	
	cy.get('#name').type('Beispiel Medikament').should('have.value', 'Beispiel Medikament')
	
	cy.get('#zeit').type('10:00').should('have.value', '10:00')
	
	cy.contains('Montag').click()
	cy.contains('Dienstag').click()
	cy.contains('Mittwoch').click()
	cy.contains('Donnerstag').click()
	cy.contains('Freitag').click()
	cy.contains('Samstag').click()
	cy.contains('Sonntag').click()
	
	cy.get('#anz').clear()
	cy.get('#anz').type('5').should('have.value', '5')
	
	cy.contains('Hinzufügen').click()
	
	cy.contains('tr', 'Beispiel Medikament')
  })
})

describe('Medikamente DeleteAll Testing', function() {
  it('Löscht alle Medikamente', function() {
    cy.visit('192.168.4.1')

    cy.contains('Medikamente erinnern').click()
	cy.url().should('include', '/medikamente_index.php')
	
	cy.contains('tr', 'Beispiel Medikament').contains('Löschen').click()
  })
})

describe('Termin Add Testing', function() {
  it('Fügt einen Termin hinzu', function() {
    cy.visit('192.168.4.1')

    cy.contains('Terminplanung').click()
	cy.url().should('include', '/termine_index.php')
	
	cy.contains('Termin hinzufügen').click()
	cy.url().should('include', '/termine_neu.php')
	
	cy.get('#name').type('Beispiel Termin').should('have.value', 'Beispiel Termin')
	
	cy.get('#datum').type('2019-01-01').should('have.value', '2019-01-01')
	
	cy.get('#zeit').type('10:00').should('have.value', '10:00')
	
	cy.get('#ort').type('Beispiel Ort').should('have.value', 'Beispiel Ort')
	
	cy.get('#hinw').type('Beispiel Hinweis').should('have.value', 'Beispiel Hinweis')
	
	cy.contains('Hinzufügen').click()
	
	cy.contains('tr', 'Beispiel Termin')
  })
})

describe('Termin DeleteAll Testing', function() {
  it('Löscht alle Termine', function() {
    cy.visit('192.168.4.1')

    cy.contains('Terminplanung').click()
	cy.url().should('include', '/termine_index.php')
	
	cy.contains('tr', 'Beispiel Termin').contains('Löschen').click()
  })
})

describe('Buch Add Testing', function() {
  it('Fügt alle Bücher hinzu', function() {
    cy.visit('192.168.4.1')

    cy.contains('Bücher vorlesen').click()
	cy.url().should('include', '/buecher_index.php')
	
	cy.get('[type="checkbox"]').check()
  })
})

describe('Buch Remove Testing', function() {
  it('Entfernt alle Bücher wieder', function() {
    cy.visit('192.168.4.1')

    cy.contains('Bücher vorlesen').click()
	cy.url().should('include', '/buecher_index.php')
	
	cy.get('[type="checkbox"]').check()
  })
})

describe('Buch Add Testing', function() {
  it('Addet alle Bücher wieder', function() {
    cy.visit('192.168.4.1')

    cy.contains('Bücher vorlesen').click()
	cy.url().should('include', '/buecher_index.php')
	
	cy.get('[type="checkbox"]').check()
  })
})

describe('Notfallsignal change Testing', function() {
  it('clicks the link "Termine add"', function() {
    cy.visit('192.168.4.1')

    cy.contains('Notfallsignal').click()
	cy.url().should('include', '/notfallsignal_index.php')
	
	cy.contains('Notfalldaten ändern').click()
	cy.get('#pwd').type('Kuscheltier').should('have.value', 'Kuscheltier')
	cy.contains('Prüfen').click()
	
	/*
	cy.get('#nameNutzer').clear()
	cy.get('#nameNutzer').type('Senior Mustermann').should('have.value', 'Senior Mustermann')
	
	cy.get('#adresseNutzer').clear()
	cy.get('#adresseNutzer').type('Musterstraße 123').should('have.value', 'Musterstraße 123')
	
	cy.get('#nrNutzer').clear()
	cy.get('#nrNutzer').type('066412324455').should('have.value', '066412324455')
	
	cy.get('#nameKontakt').clear()
	cy.get('#nameKontakt').type('Hilfi Musterfrau').should('have.value', 'Hilfi Musterfrau')
	
	cy.get('#nrKontakt').clear()
	cy.get('#nrKontakt').type('066412324466').should('have.value', '066412324466')
	*/
	
	cy.get('#submit').click()
	
	cy.url().should('include', '/notfallsignal_index.php')
  })
})