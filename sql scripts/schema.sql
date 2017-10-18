CREATE TABLE users  (
  userid VARCHAR(64) PRIMARY KEY,
  name VARCHAR(64) NOT NULL,
  password CHAR(64) NOT NULL,
  address VARCHAR(255) NOT NULL,
  role CHAR(5) NOT NULL CHECK (role = 'admin' OR role='users'),
  lastlogin TIMESTAMP NOT NULL
);

CREATE TABLE types (
    type VARCHAR(64) PRIMARY KEY,
    supertype VARCHAR(64) REFERENCES types
);

CREATE TABLE items (
  itemid SERIAL PRIMARY KEY,
  type VARCHAR(64) REFERENCES types(type) ON DELETE CASCADE,
  name VARCHAR(255) NOT NULL,
  price NUMERIC(12,2) NOT NULL,
  avaliability INTEGER NOT NULL,
  postedon TIMESTAMP DEFAULT now(),
  postedby VARCHAR(64) REFERENCES users(userid),
  description VARCHAR(255),
  pickupat VARCHAR(255) NOT NULL,
  returnat VARCHAR(255) NOT NULL
);

CREATE TABLE bids (
  userid VARCHAR(64) REFERENCES users(userid),
  itemid INTEGER REFERENCES items(itemid) ON DELETE CASCADE,
  bidamount NUMERIC(12,2) NOT NULL CHECK(bidamount >= 0),
  biddedon TIMESTAMP DEFAULT now(),
  status INTEGER NOT NULL,
  PRIMARY KEY (userid, itemid, bidamount)
);

CREATE TABLE itemimages (
    imagename VARCHAR(64) PRIMARY KEY,
    itemid INTEGER REFERENCES items(itemid) ON DELETE CASCADE
);

CREATE TABLE transaction (
	itemid INTEGER REFERENCES items(itemid),
	transactionDate DATE,
	userid VARCHAR(64) REFERENCES users(userid),
	status INTEGER,
	PRIMARY KEY (userid, itemid, status)
);