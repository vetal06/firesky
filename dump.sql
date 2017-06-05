--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.6
-- Dumped by pg_dump version 9.5.6

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: category; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE category (
    id bigint NOT NULL,
    root integer,
    lft integer NOT NULL,
    rgt integer NOT NULL,
    lvl smallint NOT NULL,
    name character varying(60) NOT NULL,
    icon character varying(255),
    icon_type smallint DEFAULT 1 NOT NULL,
    active boolean DEFAULT true NOT NULL,
    selected boolean DEFAULT false NOT NULL,
    disabled boolean DEFAULT false NOT NULL,
    readonly boolean DEFAULT false NOT NULL,
    visible boolean DEFAULT true NOT NULL,
    collapsed boolean DEFAULT false NOT NULL,
    movable_u boolean DEFAULT true NOT NULL,
    movable_d boolean DEFAULT true NOT NULL,
    movable_l boolean DEFAULT true NOT NULL,
    movable_r boolean DEFAULT true NOT NULL,
    removable boolean DEFAULT true NOT NULL,
    removable_all boolean DEFAULT false NOT NULL,
    alias character varying(50)
);


ALTER TABLE category OWNER TO postgres;

--
-- Name: characteristics; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE characteristics (
    key character varying(255) NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE characteristics OWNER TO postgres;

--
-- Name: migration; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE migration (
    version character varying(180) NOT NULL,
    apply_time integer
);


ALTER TABLE migration OWNER TO postgres;

--
-- Name: product; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE product (
    name character varying(255) NOT NULL,
    alias character varying(255) DEFAULT true NOT NULL,
    is_available boolean,
    created_at timestamp(6) without time zone DEFAULT now(),
    update_at timestamp without time zone,
    description text,
    characteristics jsonb,
    images jsonb,
    fk_category_id integer NOT NULL,
    id integer NOT NULL,
    price numeric(10,1),
    old_price numeric(10,1),
    is_top boolean DEFAULT false
);


ALTER TABLE product OWNER TO postgres;

--
-- Name: product_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE product_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE product_id_seq OWNER TO postgres;

--
-- Name: product_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE product_id_seq OWNED BY product.id;


--
-- Name: profile; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE profile (
    id integer NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    full_name character varying(255),
    timezone character varying(255)
);


ALTER TABLE profile OWNER TO postgres;

--
-- Name: profile_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE profile_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE profile_id_seq OWNER TO postgres;

--
-- Name: profile_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE profile_id_seq OWNED BY profile.id;


--
-- Name: role; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE role (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    can_admin smallint DEFAULT 0 NOT NULL
);


ALTER TABLE role OWNER TO postgres;

--
-- Name: role_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE role_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE role_id_seq OWNER TO postgres;

--
-- Name: role_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE role_id_seq OWNED BY role.id;


--
-- Name: tree_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tree_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tree_id_seq OWNER TO postgres;

--
-- Name: tree_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tree_id_seq OWNED BY category.id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "user" (
    id integer NOT NULL,
    role_id integer NOT NULL,
    status smallint NOT NULL,
    email character varying(255),
    username character varying(255),
    password character varying(255),
    auth_key character varying(255),
    access_token character varying(255),
    logged_in_ip character varying(255),
    logged_in_at timestamp(0) without time zone,
    created_ip character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    banned_at timestamp(0) without time zone,
    banned_reason character varying(255)
);


ALTER TABLE "user" OWNER TO postgres;

--
-- Name: user_auth; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE user_auth (
    id integer NOT NULL,
    user_id integer NOT NULL,
    provider character varying(255) NOT NULL,
    provider_id character varying(255) NOT NULL,
    provider_attributes text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE user_auth OWNER TO postgres;

--
-- Name: user_auth_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_auth_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_auth_id_seq OWNER TO postgres;

--
-- Name: user_auth_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_auth_id_seq OWNED BY user_auth.id;


--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_id_seq OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_id_seq OWNED BY "user".id;


--
-- Name: user_token; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE user_token (
    id integer NOT NULL,
    user_id integer,
    type smallint NOT NULL,
    token character varying(255) NOT NULL,
    data character varying(255),
    created_at timestamp(0) without time zone,
    expired_at timestamp(0) without time zone
);


ALTER TABLE user_token OWNER TO postgres;

--
-- Name: user_token_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_token_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_token_id_seq OWNER TO postgres;

--
-- Name: user_token_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_token_id_seq OWNED BY user_token.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY category ALTER COLUMN id SET DEFAULT nextval('tree_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product ALTER COLUMN id SET DEFAULT nextval('product_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY profile ALTER COLUMN id SET DEFAULT nextval('profile_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY role ALTER COLUMN id SET DEFAULT nextval('role_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user" ALTER COLUMN id SET DEFAULT nextval('user_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_auth ALTER COLUMN id SET DEFAULT nextval('user_auth_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_token ALTER COLUMN id SET DEFAULT nextval('user_token_id_seq'::regclass);


--
-- Data for Name: category; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY category (id, root, lft, rgt, lvl, name, icon, icon_type, active, selected, disabled, readonly, visible, collapsed, movable_u, movable_d, movable_l, movable_r, removable, removable_all, alias) FROM stdin;
2	1	2	15	1	Салютные установки		1	t	f	f	f	t	f	t	t	t	t	t	f	saluts
7	1	18	19	1	Фонтаны		1	t	f	f	f	t	f	t	t	t	t	t	f	fontans
3	1	3	10	2	Розводки		1	t	f	f	f	t	f	t	t	t	t	t	f	razvodki
1	1	1	40	0	Категории		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
4	1	11	12	2	Малые фейерверки		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
5	1	13	14	2	Большие фейерверки		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
6	1	16	17	1	Ракеты		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
8	1	20	21	1	Римськие свечи		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
9	1	22	23	1	Конфетти		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
10	1	24	25	1	Петарды		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
12	1	27	28	2	2,5 дюйма		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
13	1	29	30	2	3 дюйма		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
14	1	31	32	2	4 дюйма		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
15	1	33	34	2	5 дюймов		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
11	1	26	37	1	Профессиональная пиротехника		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
16	1	35	36	2	6 дюймов		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
17	1	38	39	1	Сценическая пиротехника		1	t	f	f	f	t	f	t	t	t	t	t	f	\N
20	1	8	9	3	test		1	t	f	f	f	t	f	t	t	t	t	t	f	test
\.


--
-- Data for Name: characteristics; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY characteristics (key, name) FROM stdin;
\.


--
-- Data for Name: migration; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY migration (version, apply_time) FROM stdin;
m000000_000000_base	1494753595
m150214_044831_init_user	1494753598
m230416_200116_tree	1494757252
\.


--
-- Data for Name: product; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY product (name, alias, is_available, created_at, update_at, description, characteristics, images, fk_category_id, id, price, old_price, is_top) FROM stdin;
test	tes	t	\N	\N	[p	\N	\N	4	1	180.0	300.0	t
rw	rw	t	\N	\N	\N	\N	\N	4	2	\N	\N	f
tesss	dfgdfg	t	2017-05-21 14:10:19.741159	\N	hjkhjk	{}	{}	7	3	\N	\N	f
test	test	t	2017-05-24 22:10:38.316361	\N	fgfh	{}	["product_img5925daae4ce38.jpg"]	3	4	500.0	600.0	f
\.


--
-- Name: product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('product_id_seq', 4, true);


--
-- Data for Name: profile; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY profile (id, user_id, created_at, updated_at, full_name, timezone) FROM stdin;
1	1	2017-05-14 09:19:58	\N	the one	\N
\.


--
-- Name: profile_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('profile_id_seq', 1, true);


--
-- Data for Name: role; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY role (id, name, created_at, updated_at, can_admin) FROM stdin;
1	Admin	2017-05-14 09:19:58	\N	1
2	User	2017-05-14 09:19:58	\N	0
\.


--
-- Name: role_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('role_id_seq', 2, true);


--
-- Name: tree_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tree_id_seq', 20, true);


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "user" (id, role_id, status, email, username, password, auth_key, access_token, logged_in_ip, logged_in_at, created_ip, created_at, updated_at, banned_at, banned_reason) FROM stdin;
1	1	1	neo@neo.com	neo	$2y$13$dyVw4WkZGkABf2UrGWrhHO4ZmVBv.K4puhOL59Y9jQhIdj63TlV.O	xag9W0UVcl4CEyTFuxhfWTvTxGlbtkhm	jnlfAF8F_PVrYjQZJlvKz3ZYWKK7S5_0	127.0.0.1	2017-05-24 18:33:33	\N	2017-05-14 09:19:58	\N	\N	\N
\.


--
-- Data for Name: user_auth; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY user_auth (id, user_id, provider, provider_id, provider_attributes, created_at, updated_at) FROM stdin;
\.


--
-- Name: user_auth_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_auth_id_seq', 1, false);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_id_seq', 1, true);


--
-- Data for Name: user_token; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY user_token (id, user_id, type, token, data, created_at, expired_at) FROM stdin;
\.


--
-- Name: user_token_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_token_id_seq', 1, false);


--
-- Name: characteristics_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY characteristics
    ADD CONSTRAINT characteristics_pkey PRIMARY KEY (key);


--
-- Name: migration_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY migration
    ADD CONSTRAINT migration_pkey PRIMARY KEY (version);


--
-- Name: product_alias_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product
    ADD CONSTRAINT product_alias_key UNIQUE (alias);


--
-- Name: product_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product
    ADD CONSTRAINT product_pkey PRIMARY KEY (id);


--
-- Name: profile_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY profile
    ADD CONSTRAINT profile_pkey PRIMARY KEY (id);


--
-- Name: role_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY role
    ADD CONSTRAINT role_pkey PRIMARY KEY (id);


--
-- Name: tree_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY category
    ADD CONSTRAINT tree_pkey PRIMARY KEY (id);


--
-- Name: user_auth_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_auth
    ADD CONSTRAINT user_auth_pkey PRIMARY KEY (id);


--
-- Name: user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: user_token_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_token
    ADD CONSTRAINT user_token_pkey PRIMARY KEY (id);


--
-- Name: tree_NK1; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK1" ON category USING btree (root);


--
-- Name: tree_NK2; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK2" ON category USING btree (lft);


--
-- Name: tree_NK3; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK3" ON category USING btree (rgt);


--
-- Name: tree_NK4; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK4" ON category USING btree (lvl);


--
-- Name: tree_NK5; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK5" ON category USING btree (active);


--
-- Name: user_auth_provider_id; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX user_auth_provider_id ON user_auth USING btree (provider_id);


--
-- Name: user_email; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX user_email ON "user" USING btree (email);


--
-- Name: user_token_token; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX user_token_token ON user_token USING btree (token);


--
-- Name: user_username; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX user_username ON "user" USING btree (username);


--
-- Name: product_fk_category_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product
    ADD CONSTRAINT product_fk_category_id_fkey FOREIGN KEY (fk_category_id) REFERENCES category(id);


--
-- Name: profile_user_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY profile
    ADD CONSTRAINT profile_user_id FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: user_auth_user_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_auth
    ADD CONSTRAINT user_auth_user_id FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: user_role_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_role_id FOREIGN KEY (role_id) REFERENCES role(id);


--
-- Name: user_token_user_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_token
    ADD CONSTRAINT user_token_user_id FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

